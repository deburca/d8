<?php declare(strict_types = 1);

namespace PHPStan\Rules\BooleansInConditions;

use PHPStan\Type\VerbosityLevel;

class BooleanInBooleanOrRule implements \PHPStan\Rules\Rule
{

	/** @var BooleanRuleHelper */
	private $helper;

	public function __construct(BooleanRuleHelper $helper)
	{
		$this->helper = $helper;
	}

	public function getNodeType(): string
	{
		return \PhpParser\Node\Expr\BinaryOp\BooleanOr::class;
	}

	/**
	 * @param \PhpParser\Node\Expr\BinaryOp\BooleanOr $node
	 * @param \PHPStan\Analyser\Scope $scope
	 * @return string[] errors
	 */
	public function processNode(\PhpParser\Node $node, \PHPStan\Analyser\Scope $scope): array
	{
		$messages = [];
		if (!$this->helper->passesAsBoolean($scope, $node->left)) {
			$leftType = $scope->getType($node->left);
			$messages[] = sprintf(
				'Only booleans are allowed in ||, %s given on the left side.',
				$leftType->describe(VerbosityLevel::typeOnly())
			);
		}

		if (!$this->helper->passesAsBoolean($scope, $node->right)) {
			$rightType = $scope->getType($node->right);
			$messages[] = sprintf(
				'Only booleans are allowed in ||, %s given on the right side.',
				$rightType->describe(VerbosityLevel::typeOnly())
			);
		}

		return $messages;
	}

}
