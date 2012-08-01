<?php

class GoogleLinksChecker {

	public function __construct() {
		$this->init();
	}

	public function init() {
		set_time_limit(0);
	}

	// TODO: Переписать метод нормально
	public function checkAll() {

		$links = GoogleLinks::model()->findAll("checked=:checked", array(":checked" => GoogleLinks::LINK_NOT_CHECKED));

		foreach ($links as $link) {

			$html = @file_get_contents($link->link);

			if ($html === false) {
				$link->checked = GoogleLinks::LINK_BAD;
				/*
				  if (strpos("<h1>Sorry, that page doesn’t exist!</h1>", $html) != false) {

				  } else {

				  }
				 */

				/* sleep(1); */
			} else {
				$link->checked = GoogleLinks::LINK_CHECKED;
			}
			$link->save();
			$html = null;
		}
	}

}

/*
 *
  function fetchUrl($uri) {
  $handle = curl_init();

  curl_setopt($handle, CURLOPT_URL, $uri);
  curl_setopt($handle, CURLOPT_POST, false);
  curl_setopt($handle, CURLOPT_BINARYTRANSFER, false);
  curl_setopt($handle, CURLOPT_HEADER, true);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);

  $response = curl_exec($handle);
  $hlength  = curl_getinfo($handle, CURLINFO_HEADER_SIZE);
  $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
  $body     = substr($response, $hlength);

  // If HTTP response is not 200, throw exception
  if ($httpCode != 200) {
  throw new Exception($httpCode);
  }

  return $body;
  }

  $url = 'http://some.host.com/path/to/doc';

  try {
  $response = fetchUrl($url);
  } catch (Exception $e) {
  error_log('Fetch URL failed: ' . $e->getMessage() . ' for ' . $url);
  }

 *
 */
?>
