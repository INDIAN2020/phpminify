<?php  final class WebDriverCurlException extends Exception {} // When fn6s fail  abstract class WebDriverException extends Exception {  private $c;  public function __construct($f5, $c = null) {  parent::__construct($f5);  $this->c = $c;  }  public function getResults() {  return $this->c;  }  }  class IndexOutOfBoundsWebDriverError extends WebDriverException {} // 1  class NoCollectionWebDriverError extends WebDriverException {} // 2  class NoStringWebDriverError extends WebDriverException {} // 3  class NoStringLengthWebDriverError extends WebDriverException {} // 4  class NoStringWrapperWebDriverError extends WebDriverException {} // 5  class NoSuchDriverWebDriverError extends WebDriverException {} // 6  class NoSuchElementWebDriverError extends WebDriverException {} // 7  class NoSuchFrameWebDriverError extends WebDriverException {} // 8  class UnknownCommandWebDriverError extends WebDriverException {} // 9  class ObsoleteElementWebDriverError extends WebDriverException {} // 10  class ElementNotDisplayedWebDriverError extends WebDriverException {} // 11  class InvalidElementStateWebDriverError extends WebDriverException {} // 12  class UnhandledWebDriverError extends WebDriverException {} // 13  class ExpectedWebDriverError extends WebDriverException {} // 14  class ElementNotSelectableWebDriverError extends WebDriverException {} // 15  class NoSuchDocumentWebDriverError extends WebDriverException {} // 16  class UnexpectedJavascriptWebDriverError extends WebDriverException {} // 17  class NoScriptResultWebDriverError extends WebDriverException {} // 18  class XPathLookupWebDriverError extends WebDriverException {} // 19  class NoSuchCollectionWebDriverError extends WebDriverException {} // 20  class Tfn18OutWebDriverError extends WebDriverException {} // 21  class NullPointerWebDriverError extends WebDriverException {} // 22  class NoSuchWindowWebDriverError extends WebDriverException {} // 23  class InvalidCookieDomainWebDriverError extends WebDriverException {} // 24  class UnableToSetCookieWebDriverError extends WebDriverException {} // 25  class UnexpectedAlertOpenWebDriverError extends WebDriverException {} // 26  class NoAlertOpenWebDriverError extends WebDriverException {} // 27  class ScriptTfn18outWebDriverError extends WebDriverException {} // 28  class InvalidElementCoordinatesWebDriverError extends WebDriverException {}// 29  class IMENotAvailableWebDriverError extends WebDriverException {} // 30  class IMEEngineActivationFailedWebDriverError extends WebDriverException {}// 31  class InvalidSelectorWebDriverError extends WebDriverException {} // 32 