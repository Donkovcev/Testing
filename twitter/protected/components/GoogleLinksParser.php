<?php

class GoogleLinksParser {

	protected $googleDomain = "www.google.ru";
	protected $site = "twitter.com";
	protected $num = 100;
	protected $sleep = 3;
	protected $googlePages = 3;

	public function __construct() {
		$this->init();
	}

	public function init() {
		set_time_limit(300);
		Yii::import('application.vendors.*');
		require_once('nokogiri.php');
	}

	public function load($url) {
		$result = (string) file_get_contents($url);
		return $result;
	}

	public function getSearchTerms() {
		$result = (array) GoogleSearchTerms::model()->findAll();
		return $result;
	}

	public function processHtml($html) {
		$saw = new nokogiri($html);
		$links = $saw->get('li.g h3 a')->toArray();
		$links = (array) $links;

		return $links;
	}

	public function run() {
		$searchTerms = $this->getSearchTerms();

		$limit = $this->num * $this->googlePages;

		if (count($searchTerms) > 0) {
			foreach ($searchTerms as $searchTerm) {

				$term = urlencode($searchTerm->term);

				for ($i = 1; $i < $limit; $i = $i + 99) {

					//$html = file_get_contents('http://www.google.ru/search?hl=ru&start=' . $i . '&num=100&output=search&q=' . $term . '+site:twitter.com+%E2%80%9DLocation:+Russia%E2%80%9D');
					$link = 'http://' . $this->googleDomain . '/search?hl=ru&start=' . $i . '&num=' . $this->num . '&output=search&q=' . $term . '+site:' . $this->site;

					$html = $this->load($link);

					// Проверяем найдены ли результаты в Google
					if (strpos("class=\"nrsug\"", $html) === false) {
						$links = $this->processHtml($html);

						if (count($links) > 0) {
							foreach ($links as $link) {
								$link = str_replace('https', 'http', $link['href']);
								$link = str_replace("/url?q=", '', $link);
								$link = explode('&sa=U', $link);
								$link = $link[0];

								if ($link[strlen($link) - 1] != '/') {
									$link .= '/';
								}

								$link = preg_replace('@(http://.*?' . $this->site . '/.*?/)(.*)@i', '$1', $link);

								if (filter_var($link, FILTER_VALIDATE_URL)) {
									$googleLinks = new GoogleLinks();
									$googleLinks->link = $link;
									$googleLinks->google_search_terms_id = $searchTerm->id;
									try {
										$googleLinks->save();
									} catch (Exception $e) {

									}
								}
							}
						}


						sleep($this->sleep);
					}
				}
			}
		}
	}

}

?>
