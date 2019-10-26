<?php
/*************************************************************************************
 * cpp.php
 * -------
 * Author: Iulian M
 * Copyright: (c) 2006 Iulian M
 * Release Version: 1.0.9.1
 * Date Started: 2004/09/27
 *
 * C++ (with Qt extensions) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/06/28 (1.0.8.4)
 *   -  Updated list of Keywords from Qt 4.5
 *
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 *
 * TODO
 * ----
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'C++ (Qt)',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //C++ 11 string literal extensions
        3 => '/(?:L|u8?|U)(?=")/',
        //C++ 11 string literal extensions (raw)
        4 => '/R"([^()\s\\\\]*)\((?:(?!\)\\1").)*\)\\1"/ms'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[abfnrtv\\\'\"?\n]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#"
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'case', 'continue', 'default', 'do', 'else', 'for', 'goto', 'if', 'return',
            'switch', 'while', 'delete', 'new', 'this'
            ),
        2 => array(
            'NULL', 'false', 'break', 'true', 'enum', 'errno', 'EDOM',
            'ERANGE', 'FLT_RADIX', 'FLT_ROUNDS', 'FLT_DIG', 'DBL_DIG', 'LDBL_DIG',
            'FLT_EPSILON', 'DBL_EPSILON', 'LDBL_EPSILON', 'FLT_MANT_DIG', 'DBL_MANT_DIG',
            'LDBL_MANT_DIG', 'FLT_MAX', 'DBL_MAX', 'LDBL_MAX', 'FLT_MAX_EXP', 'DBL_MAX_EXP',
            'LDBL_MAX_EXP', 'FLT_MIN', 'DBL_MIN', 'LDBL_MIN', 'FLT_MIN_EXP', 'DBL_MIN_EXP',
            'LDBL_MIN_EXP', 'CHAR_BIT', 'CHAR_MAX', 'CHAR_MIN', 'SCHAR_MAX', 'SCHAR_MIN',
            'UCHAR_MAX', 'SHRT_MAX', 'SHRT_MIN', 'USHRT_MAX', 'INT_MAX', 'INT_MIN',
            'UINT_MAX', 'LONG_MAX', 'LONG_MIN', 'ULONG_MAX', 'HUGE_VAL', 'SIGABRT',
            'SIGFPE', 'SIGILL', 'SIGINT', 'SIGSEGV', 'SIGTERM', 'SIG_DFL', 'SIG_ERR',
            'SIG_IGN', 'BUFSIZ', 'EOF', 'FILENAME_MAX', 'FOPEN_MAX', 'L_tmpnam',
            'SEEK_CUR', 'SEEK_END', 'SEEK_SET', 'TMP_MAX', 'stdin', 'stdout', 'stderr',
            'EXIT_FAILURE', 'EXIT_SUCCESS', 'RAND_MAX', 'CLOCKS_PER_SEC',
            'virtual', 'public', 'private', 'protected', 'template', 'using', 'namespace',
            'try', 'catch', 'inline', 'dynamic_cast', 'const_cast', 'reinterpret_cast',
            'static_cast', 'explicit', 'friend', 'typename', 'typeid', 'class' ,
            'foreach','connect', 'Q_OBJECT' , 'slots' , 'signals', 'Q_SIGNALS', 'Q_SLOTS',
            'Q_FOREACH', 'QCOMPARE', 'QVERIFY', 'qDebug', 'kDebug', 'QBENCHMARK',
            'SIGNAL', 'SLOT', 'emit'
            ),
        3 => array(
            'cin', 'cerr', 'clog', 'cout',
            'printf', 'fprintf', 'snprintf', 'sprintf', 'assert',
            'isalnum', 'isalpha', 'isdigit', 'iscntrl', 'isgraph', 'islower', 'isprint',
            'ispunct', 'isspace', 'isupper', 'isxdigit', 'tolower', 'toupper',
            'exp', 'log', 'log10', 'pow', 'sqrt', 'ceil', 'floor', 'fabs', 'ldexp',
            'frexp', 'modf', 'fmod', 'sin', 'cos', 'tan', 'asin', 'acos', 'atan', 'atan2',
            'sinh', 'cosh', 'tanh', 'setjmp', 'longjmp',
            'va_start', 'va_arg', 'va_end', 'offsetof', 'sizeof', 'fopen', 'freopen',
            'fflush', 'fclose', 'remove', 'rename', 'tmpfile', 'tmpname', 'setvbuf',
            'setbuf', 'vfprintf', 'vprintf', 'vsprintf', 'fscanf', 'scanf', 'sscanf',
            'fgetc', 'fgets', 'fputc', 'fputs', 'getc', 'getchar', 'gets', 'putc',
            'putchar', 'puts', 'ungetc', 'fread', 'fwrite', 'fseek', 'ftell', 'rewind',
            'fgetpos', 'fsetpos', 'clearerr', 'feof', 'ferror', 'perror', 'abs', 'labs',
            'div', 'ldiv', 'atof', 'atoi', 'atol', 'strtod', 'strtol', 'strtoul', 'calloc',
            'malloc', 'realloc', 'free', 'abort', 'exit', 'atexit', 'system', 'getenv',
            'bsearch', 'qsort', 'rand', 'srand', 'strcpy', 'strncpy', 'strcat', 'strncat',
            'strcmp', 'strncmp', 'strcoll', 'strchr', 'strrchr', 'strspn', 'strcspn',
            'strpbrk', 'strstr', 'strlen', 'strerror', 'strtok', 'strxfrm', 'memcpy',
            'memmove', 'memcmp', 'memchr', 'memset', 'clock', 'time', 'difftime', 'mktime',
            'asctime', 'ctime', 'gmtime', 'localtime', 'strftime'
            ),
        4 => array(
            'auto', 'bool', 'char', 'const', 'double', 'float', 'int', 'long', 'longint',
            'register', 'short', 'shortint', 'signed', 'static', 'struct',
            'typedef', 'union', 'unsigned', 'void', 'volatile', 'extern', 'jmp_buf',
            'signal', 'raise', 'va_list', 'ptrdiff_t', 'size_t', 'FILE', 'fpos_t',
            'div_t', 'ldiv_t', 'clock_t', 'time_t', 'tm', 'wchar_t',

            'int8', 'int16', 'int32', 'int64',
            'uint8', 'uint16', 'uint32', 'uint64',

            'int_fast8_t', 'int_fast16_t', 'int_fast32_t', 'int_fast64_t',
            'uint_fast8_t', 'uint_fast16_t', 'uint_fast32_t', 'uint_fast64_t',

            'int_least8_t', 'int_least16_t', 'int_least32_t', 'int_least64_t',
            'uint_least8_t', 'uint_least16_t', 'uint_least32_t', 'uint_least64_t',

            'int8_t', 'int16_t', 'int32_t', 'int64_t',
            'uint8_t', 'uint16_t', 'uint32_t', 'uint64_t',

            'intmax_t', 'uintmax_t', 'intptr_t', 'uintptr_t'
            ),
        5 => array(
            'Q_INT8', 'Q_INT16', 'Q_INT32', 'Q_INT64', 'Q_LLONG', 'Q_LONG',
            'Q_UINT8', 'Q_UINT16', 'Q_UINT32', 'Q_UINT64', 'Q_ULLONG', 'Q_ULONG',

            'QAbstractAnimation', 'QAbstractButton', 'QAbstractEventDispatcher',
            'QAbstractExtensionFactory', 'QAbstractExtensionManager',
            'QAbstractFormBuilder', 'QAbstractGraphicsShapeItem',
            'QAbstractItemDelegate', 'QAbstractItemModel', 'QAbstractItemView',
            'QAbstractListModel', 'QAbstractMessageHandler',
            'QAbstractNativeEventFilter', 'QAbstractNetworkCache',
            'QAbstractOpenGLFunctions', 'QAbstractPlanarVideoBuffer',
            'QAbstractPrintDialog', 'QAbstractProxyModel', 'QAbstractScrollArea',
            'QAbstractSlider', 'QAbstractSocket', 'QAbstractSpinBox',
            'QAbstractState', 'QAbstractTableModel',
            'QAbstractTextDocumentLayout', 'QAbstractTransition',
            'QAbstractUriResolver', 'QAbstractVideoBuffer',
            'QAbstractVideoSurface', 'QAbstractXmlNodeModel',
            'QAbstractXmlReceiver', 'QAccelerometer', 'QAccelerometerFilter',
            'QAccelerometerReading', 'QAccessible', 'QAccessibleActionInterface',
            'QAccessibleEditableTextInterface', 'QAccessibleEvent',
            'QAccessibleInterface', 'QAccessibleObject', 'QAccessiblePlugin',
            'QAccessibleStateChangeEvent', 'QAccessibleTableCellInterface',
            'QAccessibleTableInterface', 'QAccessibleTableModelChangeEvent',
            'QAccessibleTextCursorEvent', 'QAccessibleTextInsertEvent',
            'QAccessibleTextInterface', 'QAccessibleTextRemoveEvent',
            'QAccessibleTextSelectionEvent', 'QAccessibleTextUpdateEvent',
            'QAccessibleValueChangeEvent', 'QAccessibleValueInterface',
            'QAccessibleWidget', 'QAction', 'QActionEvent', 'QActionGroup',
            'QAltimeter', 'QAltimeterFilter', 'QAltimeterReading',
            'QAmbientLightFilter','QAmbientLightReading', 'QAmbientLightSensor',
            'QAmbientTemperatureFilter', 'QAmbientTemperatureReading',
            'QAmbientTemperatureSensor', 'QAndroidActivityResultReceiver',
            'QAndroidJniEnvironment', 'QAndroidJniObject', 'QAnimationGroup',
            'QApplication', 'QAssociativeIterable', 'QAtomicInt',
            'QAtomicInteger', 'QAtomicPointer', 'QAudioBuffer', 'QAudioDecoder',
            'QAudioDecoderControl', 'QAudioDeviceInfo', 'QAudioEncoderSettings',
            'QAudioEncoderSettingsControl', 'QAudioFormat', 'QAudioInput',
            'QAudioInputSelectorControl', 'QAudioOutput',
            'QAudioOutputSelectorControl', 'QAudioProbe', 'QAudioRecorder',
            'QAuthenticator', 'QAxAggregated', 'QAxBase', 'QAxBindable',
            'QAxFactory', 'QAxObject', 'QAxScript', 'QAxScriptEngine',
            'QAxScriptManager', 'QAxSelect', 'QAxWidget', 'QBackingStore',
            'QBasicTimer', 'QBitArray', 'QBitmap', 'QBluetoothAddress',
            'QBluetoothDeviceDiscoveryAgent', 'QBluetoothDeviceInfo',
            'QBluetoothHostInfo', 'QBluetoothLocalDevice', 'QBluetoothServer',
            'QBluetoothServiceDiscoveryAgent', 'QBluetoothServiceInfo',
            'QBluetoothSocket', 'QBluetoothTransferManager',
            'QBluetoothTransferReply', 'QBluetoothTransferRequest',
            'QBluetoothUuid', 'QBoxLayout', 'QBrush', 'QBuffer', 'QButtonGroup',
            'QByteArray', 'QByteArrayList', 'QByteArrayMatcher', 'QCache',
            'QCalendarWidget', 'QCamera', 'QCameraCaptureBufferFormatControl',
            'QCameraCaptureDestinationControl', 'QCameraControl',
            'QCameraExposure', 'QCameraExposureControl', 'QCameraFeedbackControl',
            'QCameraFlashControl', 'QCameraFocus', 'QCameraFocusControl',
            'QCameraFocusZone', 'QCameraImageCapture',
            'QCameraImageCaptureControl', 'QCameraImageProcessing',
            'QCameraImageProcessingControl', 'QCameraInfo', 'QCameraInfoControl',
            'QCameraLocksControl', 'QCameraViewfinder',
            'QCameraViewfinderSettingsControl', 'QCameraZoomControl', 'QChar',
            'QCheckBox', 'QChildEvent', 'QClipboard', 'QCloseEvent',
            'QCocoaNativeContext', 'QCollator', 'QCollatorSortKey', 'QColor',
            'QColorDialog', 'QColormap', 'QColumnView', 'QComboBox',
            'QCommandLineOption', 'QCommandLineParser', 'QCommandLinkButton',
            'QCommonStyle', 'QCompass', 'QCompassFilter', 'QCompassReading',
            'QCompleter', 'QConicalGradient', 'QContextMenuEvent',
            'QContiguousCache', 'QCoreApplication', 'QCryptographicHash',
            'QCursor', 'QDBusAbstractAdaptor', 'QDBusAbstractInterface',
            'QDBusArgument', 'QDBusConnection', 'QDBusConnectionInterface',
            'QDBusContext', 'QDBusError', 'QDBusInterface', 'QDBusMessage',
            'QDBusObjectPath', 'QDBusPendingCall', 'QDBusPendingCallWatcher',
            'QDBusPendingReply', 'QDBusReply', 'QDBusServer',
            'QDBusServiceWatcher', 'QDBusSignature', 'QDBusUnixFileDescriptor',
            'QDBusVariant', 'QDBusVirtualObject', 'QDataStream',
            'QDataWidgetMapper', 'QDate', 'QDateEdit', 'QDateTime',
            'QDateTimeEdit', 'QDebug', 'QDebugStateSaver',
            'QDesignerActionEditorInterface', 'QDesignerContainerExtension',
            'QDesignerCustomWidgetCollectionInterface',
            'QDesignerCustomWidgetInterface',
            'QDesignerDynamicPropertySheetExtension',
            'QDesignerFormEditorInterface', 'QDesignerFormWindowCursorInterface',
            'QDesignerFormWindowInterface', 'QDesignerFormWindowManagerInterface',
            'QDesignerMemberSheetExtension', 'QDesignerObjectInspectorInterface',
            'QDesignerPropertyEditorInterface', 'QDesignerPropertySheetExtension',
            'QDesignerTaskMenuExtension', 'QDesignerWidgetBoxInterface',
            'QDesktopServices', 'QDesktopWidget', 'QDial', 'QDialog',
            'QDialogButtonBox', 'QDir', 'QDirIterator', 'QDirModel',
            'QDistanceFilter', 'QDistanceReading', 'QDistanceSensor',
            'QDnsDomainNameRecord', 'QDnsHostAddressRecord', 'QDnsLookup',
            'QDnsMailExchangeRecord', 'QDnsServiceRecord', 'QDnsTextRecord',
            'QDockWidget', 'QDomAttr', 'QDomCDATASection', 'QDomCharacterData',
            'QDomComment', 'QDomDocument', 'QDomDocumentFragment',
            'QDomDocumentType', 'QDomElement', 'QDomEntity', 'QDomEntityReference',
            'QDomImplementation', 'QDomNamedNodeMap', 'QDomNode', 'QDomNodeList',
            'QDomNotation', 'QDomProcessingInstruction', 'QDomText',
            'QDoubleSpinBox', 'QDoubleValidator', 'QDrag', 'QDragEnterEvent',
            'QDragLeaveEvent', 'QDragMoveEvent', 'QDropEvent',
            'QDynamicPropertyChangeEvent', 'EnginioClient',
            'EnginioClientConnection', 'EnginioIdentity', 'EnginioModel',
            'EnginioOAuth2Authentication', 'EnginioReply', 'QEGLNativeContext',
            'QEasingCurve', 'QEglFSFunctions', 'QElapsedTimer',
            'QEnableSharedFromThis', 'QEnterEvent', 'QErrorMessage', 'QEvent',
            'QEventLoop', 'QEventLoopLocker', 'QEventTransition', 'QException',
            'QExplicitlySharedDataPointer', 'QExposeEvent', 'QExtensionFactory',
            'QExtensionManager', 'QFile', 'QFileDevice', 'QFileDialog',
            'QFileIconProvider', 'QFileInfo', 'QFileOpenEvent', 'QFileSelector',
            'QFileSystemModel', 'QFileSystemWatcher', 'QFinalState', 'QFlag',
            'QFlags', 'QFocusEvent', 'QFocusFrame', 'QFont', 'QFontComboBox',
            'QFontDatabase', 'QFontDialog', 'QFontInfo', 'QFontMetrics',
            'QFontMetricsF', 'QFormBuilder', 'QFormLayout', 'QFrame', 'QFuture',
            'QFutureIterator', 'QFutureSynchronizer', 'QFutureWatcher',
            'QGLBuffer', 'QGLColormap', 'QGLContext', 'QGLFormat',
            'QGLFramebufferObject', 'QGLFramebufferObjectFormat', 'QGLFunctions',
            'QGLPixelBuffer', 'QGLShader', 'QGLShaderProgram', 'QGLWidget',
            'QGLXNativeContext', 'QGenericArgument', 'QGenericMatrix',
            'QGenericPlugin', 'QGenericPluginFactory', 'QGenericReturnArgument',
            'QGeoAddress', 'QGeoAreaMonitorInfo', 'QGeoAreaMonitorSource',
            'QGeoCircle', 'QGeoCodeReply', 'QGeoCodingManager',
            'QGeoCodingManagerEngine', 'QGeoCoordinate', 'QGeoLocation',
            'QGeoManeuver', 'QGeoPositionInfo', 'QGeoPositionInfoSource',
            'QGeoPositionInfoSourceFactory', 'QGeoRectangle', 'QGeoRoute',
            'QGeoRouteReply', 'QGeoRouteRequest', 'QGeoRouteSegment',
            'QGeoRoutingManager', 'QGeoRoutingManagerEngine',
            'QGeoSatelliteInfo', 'QGeoSatelliteInfoSource',
            'QGeoServiceProvider', 'QGeoServiceProviderFactory', 'QGeoShape',
            'QGesture', 'QGestureEvent', 'QGestureRecognizer', 'QGlobalStatic',
            'QGlyphRun', 'QGradient', 'QGraphicsAnchor', 'QGraphicsAnchorLayout',
            'QGraphicsBlurEffect', 'QGraphicsColorizeEffect',
            'QGraphicsDropShadowEffect', 'QGraphicsEffect',
            'QGraphicsEllipseItem', 'QGraphicsGridLayout', 'QGraphicsItem',
            'QGraphicsItemAnimation', 'QGraphicsItemGroup', 'QGraphicsLayout',
            'QGraphicsLayoutItem', 'QGraphicsLineItem', 'QGraphicsLinearLayout',
            'QGraphicsObject', 'QGraphicsOpacityEffect', 'QGraphicsPathItem',
            'QGraphicsPixmapItem', 'QGraphicsPolygonItem',
            'QGraphicsProxyWidget', 'QGraphicsRectItem', 'QGraphicsRotation',
            'QGraphicsScale', 'QGraphicsScene', 'QGraphicsSceneContextMenuEvent',
            'QGraphicsSceneDragDropEvent', 'QGraphicsSceneEvent',
            'QGraphicsSceneHelpEvent', 'QGraphicsSceneHoverEvent',
            'QGraphicsSceneMouseEvent', 'QGraphicsSceneMoveEvent',
            'QGraphicsSceneResizeEvent', 'QGraphicsSceneWheelEvent',
            'QGraphicsSimpleTextItem', 'QGraphicsSvgItem', 'QGraphicsTextItem',
            'QGraphicsTransform', 'QGraphicsVideoItem', 'QGraphicsView',
            'QGraphicsWebView', 'QGraphicsWidget', 'QGridLayout', 'QGroupBox',
            'QGuiApplication', 'QGyroscope', 'QGyroscopeFilter',
            'QGyroscopeReading', 'QHBoxLayout', 'QHash', 'QHashIterator',
            'QHeaderView', 'QHelpContentItem', 'QHelpContentModel',
            'QHelpContentWidget', 'QHelpEngine', 'QHelpEngineCore', 'QHelpEvent',
            'QHelpIndexModel', 'QHelpIndexWidget', 'QHelpSearchEngine',
            'QHelpSearchQuery', 'QHelpSearchQueryWidget',
            'QHelpSearchResultWidget', 'QHideEvent', 'QHistoryState',
            'QHolsterFilter', 'QHolsterReading', 'QHolsterSensor',
            'QHostAddress', 'QHostInfo', 'QHoverEvent', 'QHttpMultiPart',
            'QHttpPart', 'QIODevice', 'QIRProximityFilter', 'QIRProximityReading',
            'QIRProximitySensor', 'QIcon', 'QIconDragEvent', 'QIconEngine',
            'QIconEnginePlugin', 'QIdentityProxyModel', 'QImage',
            'QImageEncoderControl', 'QImageEncoderSettings', 'QImageIOHandler',
            'QImageIOPlugin', 'QImageReader', 'QImageWriter', 'QInputDialog',
            'QInputEvent', 'QInputMethod', 'QInputMethodEvent',
            'QInputMethodQueryEvent', 'QIntValidator', 'QItemDelegate',
            'QItemEditorCreator', 'QItemEditorCreatorBase', 'QItemEditorFactory',
            'QItemSelection', 'QItemSelectionModel', 'QItemSelectionRange',
            'QJSEngine', 'QJSValue', 'QJSValueIterator', 'QJsonArray',
            'QJsonDocument', 'QJsonObject', 'QJsonParseError', 'QJsonValue',
            'QKeyEvent', 'QKeyEventTransition', 'QKeySequence', 'QKeySequenceEdit',
            'QLCDNumber', 'QLabel', 'QLatin1Char', 'QLatin1String', 'QLayout',
            'QLayoutItem', 'QLibrary', 'QLibraryInfo', 'QLightFilter',
            'QLightReading', 'QLightSensor', 'QLine', 'QLineEdit', 'QLineF',
            'QLinearGradient', 'QLinkedList', 'QLinkedListIterator', 'QList',
            'QListIterator', 'QListView', 'QListWidget', 'QListWidgetItem',
            'QLocalServer', 'QLocalSocket', 'QLocale', 'QLockFile',
            'QLoggingCategory', 'QLowEnergyCharacteristic',
            'QLowEnergyController', 'QLowEnergyDescriptor', 'QLowEnergyService',
            'QMacCocoaViewContainer', 'QMacNativeWidget', 'QMacPasteboardMime',
            'QMacToolBar', 'QMacToolBarItem', 'QMagnetometer',
            'QMagnetometerFilter', 'QMagnetometerReading', 'QMainWindow', 'QMap',
            'QMapIterator', 'QMargins', 'QMarginsF', 'QMaskGenerator', 'QMatrix',
            'QMatrix4x4', 'QMdiArea', 'QMdiSubWindow', 'QMediaAudioProbeControl',
            'QMediaAvailabilityControl', 'QMediaBindableInterface',
            'QMediaContainerControl', 'QMediaContent', 'QMediaControl',
            'QMediaGaplessPlaybackControl', 'QMediaNetworkAccessControl',
            'QMediaObject', 'QMediaPlayer', 'QMediaPlayerControl',
            'QMediaPlaylist', 'QMediaRecorder', 'QMediaRecorderControl',
            'QMediaResource', 'QMediaService', 'QMediaServiceCameraInfoInterface',
            'QMediaServiceFeaturesInterface', 'QMediaServiceProviderPlugin',
            'QMediaServiceSupportedDevicesInterface',
            'QMediaServiceSupportedFormatsInterface', 'QMediaStreamsControl',
            'QMediaTimeInterval', 'QMediaTimeRange', 'QMediaVideoProbeControl',
            'QMenu', 'QMenuBar', 'QMessageAuthenticationCode', 'QMessageBox',
            'QMessageLogContext', 'QMessageLogger', 'QMetaClassInfo',
            'QMetaDataReaderControl', 'QMetaDataWriterControl', 'QMetaEnum',
            'QMetaMethod', 'QMetaObject', 'QMetaProperty', 'QMetaType',
            'QMimeData', 'QMimeDatabase', 'QMimeType', 'QModelIndex',
            'QMouseEvent', 'QMouseEventTransition', 'QMoveEvent', 'QMovie',
            'QMultiHash', 'QMultiMap', 'QMutableHashIterator',
            'QMutableLinkedListIterator', 'QMutableListIterator',
            'QMutableMapIterator', 'QMutableSetIterator',
            'QMutableVectorIterator', 'QMutex', 'QMutexLocker',
            'QNativeGestureEvent', 'QNdefFilter', 'QNdefMessage',
            'QNdefNfcSmartPosterRecord', 'QNdefNfcTextRecord',
            'QNdefNfcUriRecord', 'QNdefRecord', 'QNearFieldManager',
            'QNearFieldShareManager', 'QNearFieldShareTarget', 'QNearFieldTarget',
            'QNetworkAccessManager', 'QNetworkAddressEntry',
            'QNetworkCacheMetaData', 'QNetworkConfiguration',
            'QNetworkConfigurationManager', 'QNetworkCookie', 'QNetworkCookieJar',
            'QNetworkDiskCache', 'QNetworkInterface', 'QNetworkProxy',
            'QNetworkProxyFactory', 'QNetworkProxyQuery', 'QNetworkReply',
            'QNetworkRequest', 'QNetworkSession', 'QNmeaPositionInfoSource',
            'QObject', 'QObjectCleanupHandler', 'QOffscreenSurface',
            'QOpenGLBuffer', 'QOpenGLContext', 'QOpenGLContextGroup',
            'QOpenGLDebugLogger', 'QOpenGLDebugMessage',
            'QOpenGLFramebufferObject', 'QOpenGLFramebufferObjectFormat',
            'QOpenGLFunctions', 'QOpenGLFunctions_1_0', 'QOpenGLFunctions_1_1',
            'QOpenGLFunctions_1_2', 'QOpenGLFunctions_1_3', 'QOpenGLFunctions_1_4',
            'QOpenGLFunctions_1_5', 'QOpenGLFunctions_2_0', 'QOpenGLFunctions_2_1',
            'QOpenGLFunctions_3_0', 'QOpenGLFunctions_3_1',
            'QOpenGLFunctions_3_2_Compatibility', 'QOpenGLFunctions_3_2_Core',
            'QOpenGLFunctions_3_3_Compatibility', 'QOpenGLFunctions_3_3_Core',
            'QOpenGLFunctions_4_0_Compatibility', 'QOpenGLFunctions_4_0_Core',
            'QOpenGLFunctions_4_1_Compatibility', 'QOpenGLFunctions_4_1_Core',
            'QOpenGLFunctions_4_2_Compatibility', 'QOpenGLFunctions_4_2_Core',
            'QOpenGLFunctions_4_3_Compatibility', 'QOpenGLFunctions_4_3_Core',
            'QOpenGLFunctions_ES2', 'QOpenGLPaintDevice',
            'QOpenGLPixelTransferOptions', 'QOpenGLShader',
            'QOpenGLShaderProgram', 'QOpenGLTexture', 'QOpenGLTimeMonitor',
            'QOpenGLTimerQuery', 'QOpenGLVersionProfile',
            'QOpenGLVertexArrayObject', 'QOpenGLWidget', 'QOpenGLWindow',
            'QOrientationFilter', 'QOrientationReading', 'QOrientationSensor',
            'QPageLayout', 'QPageSetupDialog', 'QPageSize', 'QPagedPaintDevice',
            'QPaintDevice', 'QPaintDeviceWindow', 'QPaintEngine',
            'QPaintEngineState', 'QPaintEvent', 'QPainter', 'QPainterPath',
            'QPainterPathStroker', 'QPair', 'QPalette', 'QPanGesture',
            'QParallelAnimationGroup', 'QPauseAnimation', 'QPdfWriter', 'QPen',
            'QPersistentModelIndex', 'QPicture', 'QPictureFormatPlugin',
            'QPictureIO', 'QPinchGesture', 'QPixelFormat', 'QPixmap',
            'QPixmapCache', 'QPlace', 'QPlaceAttribute', 'QPlaceCategory',
            'QPlaceContactDetail', 'QPlaceContent', 'QPlaceContentReply',
            'QPlaceContentRequest', 'QPlaceDetailsReply', 'QPlaceEditorial',
            'QPlaceIcon', 'QPlaceIdReply', 'QPlaceImage', 'QPlaceManager',
            'QPlaceManagerEngine', 'QPlaceMatchReply', 'QPlaceMatchRequest',
            'QPlaceProposedSearchResult', 'QPlaceRatings', 'QPlaceReply',
            'QPlaceResult', 'QPlaceReview', 'QPlaceSearchReply',
            'QPlaceSearchRequest', 'QPlaceSearchResult',
            'QPlaceSearchSuggestionReply', 'QPlaceSupplier', 'QPlaceUser',
            'QPlainTextDocumentLayout', 'QPlainTextEdit',
            'QPlatformSystemTrayIcon', 'QPluginLoader', 'QPoint', 'QPointF',
            'QPointer', 'QPolygon', 'QPolygonF', 'QPressureFilter',
            'QPressureReading', 'QPressureSensor', 'QPrintDialog', 'QPrintEngine',
            'QPrintPreviewDialog', 'QPrintPreviewWidget', 'QPrinter',
            'QPrinterInfo', 'QProcess', 'QProcessEnvironment', 'QProgressBar',
            'QProgressDialog', 'QPropertyAnimation', 'QProximityFilter',
            'QProximityReading', 'QProximitySensor', 'QProxyStyle',
            'QPushButton', 'QQmlAbstractProfilerAdapter',
            'QQmlAbstractUrlInterceptor', 'QQmlApplicationEngine',
            'QQmlComponent', 'QQmlContext', 'QQmlEngine', 'QQmlError',
            'QQmlExpression', 'QQmlExtensionPlugin', 'QQmlFileSelector',
            'QQmlImageProviderBase', 'QQmlIncubationController', 'QQmlIncubator',
            'QQmlListProperty', 'QQmlListReference', 'QQmlNdefRecord',
            'QQmlNetworkAccessManagerFactory', 'QQmlParserStatus', 'QQmlProperty',
            'QQmlPropertyMap', 'QQmlPropertyValueSource', 'QQmlScriptString',
            'QQuaternion', 'QQueue', 'QQuickFramebufferObject', 'QQuickImageProvider',
            'QQuickItem', 'QQuickItemGrabResult', 'QQuickPaintedItem',
            'QQuickRenderControl', 'QQuickTextDocument', 'QQuickTextureFactory',
            'QQuickView', 'QQuickWidget', 'QQuickWindow', 'QTouchEventSequence',
            'Qoutputrange', 'QRadialGradient', 'QRadioButton', 'QRadioData',
            'QRadioDataControl', 'QRadioTuner', 'QRadioTunerControl',
            'QRasterPaintEngine', 'QRasterWindow', 'QRawFont', 'QReadLocker',
            'QReadWriteLock', 'QRect', 'QRectF', 'QRegExp', 'QRegExpValidator',
            'QRegion', 'QRegularExpression', 'QRegularExpressionMatch',
            'QRegularExpressionMatchIterator', 'QRegularExpressionValidator',
            'QResizeEvent', 'QResource', 'QRotationFilter', 'QRotationReading',
            'QRotationSensor', 'QRubberBand', 'QRunnable', 'QSGAbstractRenderer',
            'QSGBasicGeometryNode', 'QSGClipNode', 'QSGDynamicTexture',
            'QSGEngine', 'QSGFlatColorMaterial', 'QSGGeometry', 'QSGGeometryNode',
            'QSGMaterial', 'QSGMaterialShader', 'QSGMaterialType', 'QSGNode',
            'QSGOpacityNode', 'QSGOpaqueTextureMaterial', 'QSGSimpleMaterial',
            'QSGSimpleMaterialShader', 'QSGSimpleRectNode',
            'QSGSimpleTextureNode', 'QSGTexture', 'QSGTextureMaterial',
            'QSGTextureProvider', 'QSGTransformNode', 'QSGVertexColorMaterial',
            'QSaveFile', 'QScopedArrayPointer', 'QScopedPointer',
            'QScopedValueRollback', 'QScreen', 'QScriptClass',
            'QScriptClassPropertyIterator', 'QScriptContext',
            'QScriptContextInfo', 'QScriptEngine', 'QScriptEngineAgent',
            'QScriptEngineDebugger', 'QScriptExtensionPlugin', 'QScriptProgram',
            'QScriptString', 'QScriptSyntaxCheckResult', 'QScriptValue',
            'QScriptValueIterator', 'QScriptable', 'QScrollArea', 'QScrollBar',
            'QScrollEvent', 'QScrollPrepareEvent', 'QScroller',
            'QScrollerProperties', 'QSemaphore', 'QSensor', 'QSensorBackend',
            'QSensorBackendFactory', 'QSensorChangesInterface', 'QSensorFilter',
            'QSensorGesture', 'QSensorGestureManager',
            'QSensorGesturePluginInterface', 'QSensorGestureRecognizer',
            'QSensorManager', 'QSensorPluginInterface', 'QSensorReading',
            'QSequentialAnimationGroup', 'QSequentialIterable', 'QSerialPort',
            'QSerialPortInfo', 'QSessionManager', 'QSet', 'QSetIterator',
            'QSettings', 'QSharedData', 'QSharedDataPointer', 'QSharedMemory',
            'QSharedPointer', 'QShortcut', 'QShortcutEvent', 'QShowEvent',
            'QSignalBlocker', 'QSignalMapper', 'QSignalSpy', 'QSignalTransition',
            'QSimpleXmlNodeModel', 'QSize', 'QSizeF', 'QSizeGrip', 'QSizePolicy',
            'QSlider', 'QSocketNotifier', 'QSortFilterProxyModel', 'QSound',
            'QSoundEffect', 'QSourceLocation', 'QSpacerItem', 'QSpinBox',
            'QSplashScreen', 'QSplitter', 'QSplitterHandle', 'QSqlDatabase',
            'QSqlDriver', 'QSqlDriverCreator', 'QSqlDriverCreatorBase',
            'QSqlDriverPlugin', 'QSqlError', 'QSqlField', 'QSqlIndex',
            'QSqlQuery', 'QSqlQueryModel', 'QSqlRecord', 'QSqlRelation',
            'QSqlRelationalDelegate', 'QSqlRelationalTableModel', 'QSqlResult',
            'QSqlTableModel', 'QSslCertificate', 'QSslCertificateExtension',
            'QSslCipher', 'QSslConfiguration', 'QSslError', 'QSslKey',
            'QSslSocket', 'QStack', 'QStackedLayout', 'QStackedWidget',
            'QStandardItem', 'QStandardItemEditorCreator', 'QStandardItemModel',
            'QStandardPaths', 'QState', 'QStateMachine', 'QStaticPlugin',
            'QStaticText', 'QStatusBar', 'QStatusTipEvent', 'QStorageInfo',
            'QString', 'QStringList', 'QStringListModel', 'QStringMatcher',
            'QStringRef', 'QStyle', 'QStyleFactory', 'QStyleHintReturn',
            'QStyleHintReturnMask', 'QStyleHintReturnVariant', 'QStyleHints',
            'QStyleOption', 'QStyleOptionButton', 'QStyleOptionComboBox',
            'QStyleOptionComplex', 'QStyleOptionDockWidget',
            'QStyleOptionFocusRect', 'QStyleOptionFrame',
            'QStyleOptionGraphicsItem', 'QStyleOptionGroupBox',
            'QStyleOptionHeader', 'QStyleOptionMenuItem',
            'QStyleOptionProgressBar', 'QStyleOptionRubberBand',
            'QStyleOptionSizeGrip', 'QStyleOptionSlider',
            'QStyleOptionSpinBox', 'QStyleOptionTab',
            'QStyleOptionTabBarBase', 'QStyleOptionTabWidgetFrame',
            'QStyleOptionTitleBar', 'QStyleOptionToolBar',
            'QStyleOptionToolBox', 'QStyleOptionToolButton',
            'QStyleOptionViewItem', 'QStylePainter', 'QStylePlugin',
            'QStyledItemDelegate', 'QSupportedWritingSystems', 'QSurface',
            'QSurfaceFormat', 'QSvgGenerator', 'QSvgRenderer', 'QSvgWidget',
            'QSwipeGesture', 'QSyntaxHighlighter', 'QSysInfo', 'QSystemSemaphore',
            'QSystemTrayIcon', 'QTabBar', 'QTabWidget', 'QTableView',
            'QTableWidget', 'QTableWidgetItem', 'QTableWidgetSelectionRange',
            'QTabletEvent', 'QTapAndHoldGesture', 'QTapFilter', 'QTapGesture',
            'QTapReading', 'QTapSensor', 'QTcpServer', 'QTcpSocket',
            'QTemporaryDir', 'QTemporaryFile', 'QTestEventList', 'QTextBlock',
            'QTextBlockFormat', 'QTextBlockGroup', 'QTextBlockUserData',
            'QTextBoundaryFinder', 'QTextBrowser', 'QTextCharFormat',
            'QTextCodec', 'QTextCursor', 'QTextDecoder', 'QTextDocument',
            'QTextDocumentFragment', 'QTextDocumentWriter', 'QTextEdit',
            'QTextEncoder', 'QTextFormat', 'QTextFragment', 'QTextFrame',
            'QTextFrameFormat', 'QTextImageFormat', 'QTextInlineObject',
            'QTextItem', 'QTextLayout', 'QTextLength', 'QTextLine', 'QTextList',
            'QTextListFormat', 'QTextObject', 'QTextObjectInterface',
            'QTextOption', 'QTextStream', 'QTextTable', 'QTextTableCell',
            'QTextTableCellFormat', 'QTextTableFormat', 'QThread', 'QThreadPool',
            'QThreadStorage', 'QTileRules', 'QTiltFilter', 'QTiltReading',
            'QTiltSensor', 'QTime', 'QTimeEdit', 'QTimeLine', 'QTimeZone',
            'QTimer', 'QTimerEvent', 'QToolBar', 'QToolBox', 'QToolButton',
            'QToolTip', 'QTouchDevice', 'QTouchEvent', 'QTransform',
            'QTranslator', 'QTreeView', 'QTreeWidget', 'QTreeWidgetItem',
            'QTreeWidgetItemIterator', 'QUdpSocket', 'QUiLoader', 'QUndoCommand',
            'QUndoGroup', 'QUndoStack', 'QUndoView', 'QUnhandledException',
            'QUrl', 'QUrlQuery', 'QUuid', 'QVBoxLayout', 'QValidator',
            'QVarLengthArray', 'QVariant', 'QVariantAnimation', 'QVector',
            'QVector2D', 'QVector3D', 'QVector4D', 'QVectorIterator',
            'QVideoDeviceSelectorControl', 'QVideoEncoderSettings',
            'QVideoEncoderSettingsControl', 'QVideoFrame', 'QVideoProbe',
            'QVideoRendererControl', 'QVideoSurfaceFormat', 'QVideoWidget',
            'QVideoWidgetControl', 'QVideoWindowControl', 'QWGLNativeContext',
            'QWaitCondition', 'QWeakPointer', 'QWebChannel',
            'QWebChannelAbstractTransport', 'QWebDatabase', 'QWebElement',
            'QWebElementCollection', 'QWebEngineHistory', 'QWebEngineHistoryItem',
            'QWebEnginePage', 'QWebEngineSettings', 'QWebEngineView', 'QWebFrame',
            'QWebHistory', 'QWebHistoryInterface', 'QWebHistoryItem',
            'QWebHitTestResult', 'QWebInspector', 'QWebPage', 'QWebPluginFactory',
            'QWebSecurityOrigin', 'QWebSettings', 'QWebSocket',
            'QWebSocketCorsAuthenticator', 'QWebSocketServer', 'QWebView',
            'QWhatsThis', 'QWhatsThisClickedEvent', 'QWheelEvent', 'QWidget',
            'QWidgetAction', 'QWidgetItem', 'QWinEventNotifier', 'QWinJumpList',
            'QWinJumpListCategory', 'QWinJumpListItem', 'QWinMime',
            'QWinTaskbarButton', 'QWinTaskbarProgress', 'QWinThumbnailToolBar',
            'QWinThumbnailToolButton', 'QWindow', 'QWindowStateChangeEvent',
            'QWizard', 'QWizardPage', 'QWriteLocker', 'QX11Info',
            'QXcbWindowFunctions', 'QXmlAttributes', 'QXmlContentHandler',
            'QXmlDTDHandler', 'QXmlDeclHandler', 'QXmlDefaultHandler',
            'QXmlEntityResolver','QXmlErrorHandler', 'QXmlFormatter',
            'QXmlInputSource', 'QXmlItem', 'QXmlLexicalHandler', 'QXmlLocator',
            'QXmlName', 'QXmlNamePool', 'QXmlNamespaceSupport',
            'QXmlNodeModelIndex', 'QXmlParseException', 'QXmlQuery',
            'QXmlReader', 'QXmlResultItems', 'QXmlSchema', 'QXmlSchemaValidator',
            'QXmlSerializer', 'QXmlSimpleReader', 'QXmlStreamAttribute',
            'QXmlStreamAttributes', 'QXmlStreamEntityDeclaration',
            'QXmlStreamEntityResolver', 'QXmlStreamNamespaceDeclaration',
            'QXmlStreamNotationDeclaration', 'QXmlStreamReader',
            'QXmlStreamWriter'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '=', '+', '-', '*', '/', '!', '%', '^', '&', ':', ',', ';', '|', '<', '>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight:bold;',
            2 => 'color: #0057AE;',
            3 => 'color: #2B74C7;',
            4 => 'color: #0057AE;',
            5 => 'color: #22aadd;'
            ),
        'COMMENTS' => array(
            1 => 'color: #888888;',
            2 => 'color: #006E28;',
            3 => 'color: #BF0303;',
            4 => 'color: #BF0303;',
            'MULTI' => 'color: #888888; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #660099; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #006E28;'
            ),
        'STRINGS' => array(
            0 => 'color: #BF0303;'
            ),
        'NUMBERS' => array(
            0 => 'color: #B08000;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #208080;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#800080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#800080;'
            ),
        'METHODS' => array(
            1 => 'color: #2B74C7;',
            2 => 'color: #2B74C7;',
            3 => 'color: #2B74C7;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #006E28;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => 'http://qt-project.org/doc/latest/{FNAMEL}.html'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::',
        3 => '-&gt;',
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\#>|^])",
            'DISALLOWED_AFTER' => "(?![a-zA-Z0-9_<\|%\\-])"
        ),
        'OOLANG' => array(
            'MATCH_AFTER' => '~?[a-zA-Z][a-zA-Z0-9_]*',
        )
    )
);
