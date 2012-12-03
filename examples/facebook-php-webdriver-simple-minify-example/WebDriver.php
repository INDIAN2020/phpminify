<?php final class WebDriver extends WebDriverBase { protected function methods() { return array( 'status' => 'GET', ); } public function session( $browser = 'firefox', $additional_capabilities = array()) { $desired_capabilities = array_merge( $additional_capabilities, array('browserName' => $browser)); $results = $this->curl( 'POST', '/session', array('desiredCapabilities' => $desired_capabilities), array(CURLOPT_FOLLOWLOCATION => true)); return new WebDriverSession($results['info']['url']); } public function sessions() { $result = $this->curl('GET', '/sessions'); $sessions = array(); foreach ($result['value'] as $session) { $sessions[] = new WebDriverSession( $this->url . '/session/' . $session['id']); } return $sessions; } } 