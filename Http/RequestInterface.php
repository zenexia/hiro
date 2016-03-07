<?php
/**
 * ==================================================================================================
 * Request Interface
 * Created by Ali Masood (ali@zenex.co).
 * Project: Hiro Php Framework
 * Date: 2016/03/07
 * ==================================================================================================
 * This file is a part of Hiro PHP Framework, a simple framework to get the job done by combining
 * the best practices of DDD, TDD and BDD.
 *
 * (c) Ali Masood <ali@zenex.co>
 *
 * This file as a part and the Hiro Framework as a whole consists of voluntary contributions made
 * by many individuals and is licensed under the MIT license.
 * For the full copyright and license information, please view the LICENSE file that was distributed
 * with this source code.
 *
 * For more information on the Hiro framework, licensing, documentation, usage guides and discussions
 * please visit our official homepage at htpp://hiro.zenex.co
 *
 * For bug reports, contribution and latest release info, please use github https://github.com/zenexia/hiro
 */


namespace Hiro\Http;

/**
 * RequestInterface lays out the foundations of the HTTP request calls and provides the complete blueprint to
 * be implemented by Hiro Framework's corresponding HTTP Request class or any class added to the framework
 * in a later stage.
 *
 */

interface RequestInterface
{

	/**
     * To get a request parameter from the current HTTP Request.
	 *
	 * If $key is empty, an exception will be thrown
	 *
	 * @param string $key
     */
	public function getParam($key);


	/**
	 * To get multiple request parameters from the current HTTP Request.
	 *
	 * If $keys is empty, an array of all the parameters will be returned
	 *
	 * @param array $keys
	 * @return mixed
	 */
	public function getParams(array $keys);

	/**
     * To get a parameters from POST request only.
	 *
     * Full POST array will be returned if $keys is empty
	 *
	 * @param array $keys
	 * @return mixed
     */
	public function getPost(array $keys);

	/**
     * To get parameters from PUT request
	 *
	 * Full PUT array will be returned if $keys is empty
	 *
	 * @param array $keys
	 * @return mixed
     */
	public function getPut(array $keys);

	/**
	 * To get parameters from GET request
	 *
	 * Full GET array will be returned if $keys is empty
	 *
	 * @param array $keys
	 * @return mixed
	 */
	public function getQuery(array $keys);


	/**
	 * To get parameters from request SERVER
	 *
	 * Full SERVER array will be returned if $keys is empty
	 *
	 * @param array $keys
	 * @return mixed
	 */
	public function getServer(array $keys);

	/**
	 * To check if given parameter is present in the request
	 *
	 * Will throw an exception if $key is empty
	 *
	 * @param string $key
	 * @return boolean
	 */
	public function has($key);

	/**
	 * To check if all of the parameters are present in the request
	 *
	 * It is an AND check and will return false if any is missing.
	 *
	 * @param array $keys
	 * @return boolean
	 */
	public function hasAll(array $keys);

	/**
     * To check if any of the parameters are present in the request
	 *
	 * It is an OR check and will return true if any one is present.
	 *
	 * @param array $keys
	 * @return boolean
     */
	public function hasAny(array $keys);

	/**
     * To Check if POST has a certain parameter
	 *
	 * Will throw an exception if the $key is empty
	 *
	 * @param string $key
	 * @return boolean
     */
	public function postHas($key);

	/**
	 * To Check if PUT has a certain parameter
	 *
	 * Will throw an exception if the $key is empty
	 *
	 * @param string $key
	 * @return boolean
	 */
	public function putHas($key);

	/**
	 * To Check if GET has a certain parameter
	 *
	 * Will throw an exception if the $key is empty
	 *
	 * @param string $key
	 * @return boolean
	 */
	public function queryHas($key);

	/**
	 * To Check if SERVER has a certain parameter
	 *
	 * Will throw an exception if the $key is empty
	 *
	 * @param string $key
	 * @return boolean
	 */
	public function serverHas($key);

	/**
	 * To Check if HEADER has a certain parameter
	 *
	 * Will throw an exception if the $key is empty
	 *
	 * @param string $key
	 * @return boolean
	 */
	public function headerHas($key);

	/**
	 * To get a request HEADER parameter from the current HTTP Request.
	 *
	 * If the $key is empty, an exception will be thrown
	 *
	 * @param string $key
	 */
	public function getHeader($key);


	/**
	 * To get multiple request HEADER parameters from the current HTTP Request.
	 *
	 * If the $keys is empty, an array of all the HEADERS  will be returned
	 *
	 * @param array $keys
	 * @return mixed
	 */
	public function getHeaders(array $keys);


	/**
     * To get the request protocol (http/https)
	 * @return string
     */
	public function getProtocol();


	/**
     * To check if its an ajax request
	 *
	 * @return boolean
     */
	public function isAjax();


	/**
     * To check if its a SOAP request
	 *
	 * @return boolean
     */
	public function isSoap();

	/**
     * To check if request is made using SSL
	 *
	 * @return boolean
     */
	public function isSecure();

	/**
	 * To check if request is a raw json request
	 *
	 * @return boolean
	 */
	public function isJson();

	/**
     * To get decoded JSON if it is present
     */
	public function getJson();


	/**
     * To get HTTP URI for current request
     */
	public final function getURI();



	/**
     * To get HTTP request method
     */
	public function getMethod();

	/**
	 * To check if request is made using GET method
	 *
	 * @return boolean
	 */
	public function isGet();

	/**
	 * To check if request is made using POST method
	 *
	 * @return boolean
	 */
	public function isPost();

	/**
	 * To check if request is made using PUT method
	 *
	 * @return boolean
	 */
	public function isPut();

	/**
	 * To check if request is made using OPTIONS method
	 *
	 * @return boolean
	 */
	public function isOptions();

	/**
	 * To check if request is made using DELETE method
	 *
	 * @return boolean
	 */
	public function isDelete();

	/**
	 * To check if request is made using PATCH method
	 *
	 * @return boolean
	 */
	public function isPatch();

	/**
	 * To check if request is made using HEAD method
	 *
	 * @return boolean
	 */
	public function isHead();



	/**
     * Checks whether request include attached files
     */
	public function hasFiles(boolean onlySuccessful = false) -> long
	{
        var files, file, error;
		int numberFiles = 0;

		let files = _FILES;

		if typeof files != "array" {
        return 0;
    }

		for file in files {
            if fetch error, file["error"] {

                if typeof error != "array" {
                    if !error || !onlySuccessful {
                        let numberFiles++;
					}
                }

				if typeof error == "array" {
                    let numberFiles += this->hasFileHelper(error, onlySuccessful);
				}
			}
		}

		return numberFiles;
	}

	/**
     * Recursively counts file in an array of files
     */
	protected final function hasFileHelper(var data, boolean onlySuccessful) -> long
	{
        var value;
        int numberFiles = 0;

		if typeof data != "array" {
        return 1;
    }

		for value in data {
            if typeof value != "array" {
                if !value || !onlySuccessful {
                    let numberFiles++;
				}
            }

			if typeof value == "array" {
                let numberFiles += this->hasFileHelper(value, onlySuccessful);
			}
		}

		return numberFiles;
	}

	/**
     * Gets attached files as Phalcon\Http\Request\File instances
     */
	public function getUploadedFiles(boolean onlySuccessful = false) -> <File[]>
	{
        var superFiles, prefix, input, smoothInput, file, dataFile;
		array files = [];

		let superFiles = _FILES;

		if count(superFiles) > 0 {

            for prefix, input in superFiles {
                if typeof input["name"] == "array" {
                    let smoothInput = this->smoothFiles(input["name"], input["type"], input["tmp_name"], input["size"], input["error"], prefix);

					for file in smoothInput {
                        if onlySuccessful == false || file["error"] == UPLOAD_ERR_OK {
                            let dataFile = [
                                "name": file["name"],
								"type": file["type"],
								"tmp_name": file["tmp_name"],
								"size": file["size"],
								"error": file["error"]
							];

							let files[] = new File(dataFile, file["key"]);
						}
                    }
				} else {
                    if onlySuccessful == false || input["error"] == UPLOAD_ERR_OK {
                        let files[] = new File(input, prefix);
					}
                }
			}
        }

		return files;
	}

	/**
     * Smooth out $_FILES to have plain array with all files uploaded
     */
	protected final function smoothFiles(array! names, array! types, array! tmp_names, array! sizes, array! errors, string prefix) -> array
	{
        var idx, name, file, files, parentFiles, p;

		let files = [];

		for idx, name in names {
            let p = prefix . "." . idx;

			if typeof name == "string" {

                let files[] = [
                    "name": name,
					"type": types[idx],
					"tmp_name": tmp_names[idx],
					"size": sizes[idx],
					"error": errors[idx],
					"key": p
				];
			}

			if typeof name == "array" {
                let parentFiles = this->smoothFiles(names[idx], types[idx], tmp_names[idx], sizes[idx], errors[idx], p);

				for file in parentFiles {
                    let files[] = file;
				}
			}
		}

		return files;
	}

	/**
     * Returns the available headers in the request
     */
	public function getHeaders() -> array
	{
        var name, value, contentHeaders;
		array headers;

		let headers = [];
		let contentHeaders = ["CONTENT_TYPE": true, "CONTENT_LENGTH": true];

		for name, value in _SERVER {
            if starts_with(name, "HTTP_") {
            let name = ucwords(strtolower(str_replace("_", " ", substr(name, 5)))),
					name = str_replace(" ", "-", name);
				let headers[name] = value;
			} elseif isset contentHeaders[name] {
                let name = ucwords(strtolower(str_replace("_", " ", name))),
					name = str_replace(" ", "-", name);
				let headers[name] = value;
			}
		}

		return headers;
	}

	/**
     * Gets web page that refers active request. ie: http://www.google.com
     */
	public function getHTTPReferer() -> string
	{
        var httpReferer;
        if fetch httpReferer, _SERVER["HTTP_REFERER"] {
        return httpReferer;
    }
		return "";
	}

	/**
     * Process a request header and return an array of values with their qualities
     */
	protected final function _getQualityHeader(string! serverIndex, string! name) -> array
	{
        var returnedParts, part, headerParts, headerPart, split;

		let returnedParts = [];
		for part in preg_split("/,\\s*/", this->getServer(serverIndex), -1, PREG_SPLIT_NO_EMPTY) {

            let headerParts = [];
			for headerPart in preg_split("/\s*;\s*/", trim(part), -1, PREG_SPLIT_NO_EMPTY) {
				if strpos(headerPart, "=") !== false {
                    let split = explode("=", headerPart, 2);
					if split[0] === "q" {
                        let headerParts["quality"] = (double) split[1];
					} else {
                        let headerParts[split[0]] = split[1];
					}
				} else {
                    let headerParts[name] = headerPart;
					let headerParts["quality"] = 1.0;
				}
			}

			let returnedParts[] = headerParts;
		}

		return returnedParts;
	}

	/**
     * Process a request header and return the one with best quality
     */
	protected final function _getBestQuality(array qualityParts, string! name) -> string
	{
        int i;
		double quality, acceptQuality;
		var selectedName, accept;

		let i = 0,
			quality = 0.0,
			selectedName = "";

		for accept in qualityParts {
            if i == 0 {
                let quality = (double) accept["quality"],
					selectedName = accept[name];
			} else {
                let acceptQuality = (double) accept["quality"];
				if acceptQuality > quality {
                    let quality = acceptQuality,
						selectedName = accept[name];
				}
			}
            let i++;
		}
		return selectedName;
	}

	/**
     * Gets content type which request has been made
     */
	public function getContentType() -> string | null
	{
        var contentType;

        if fetch contentType, _SERVER["CONTENT_TYPE"] {
        return contentType;
    } else {
        /**
         * @see https://bugs.php.net/bug.php?id=66606
         */
        if fetch contentType, _SERVER["HTTP_CONTENT_TYPE"] {
            return contentType;
        }
		}

		return null;
	}

	/**
     * Gets an array with mime/types and their quality accepted by the browser/client from _SERVER["HTTP_ACCEPT"]
     */
	public function getAcceptableContent() -> array
	{
        return this->_getQualityHeader("HTTP_ACCEPT", "accept");
	}

	/**
     * Gets best mime/type accepted by the browser/client from _SERVER["HTTP_ACCEPT"]
     */
	public function getBestAccept() -> string
	{
        return this->_getBestQuality(this->getAcceptableContent(), "accept");
	}

	/**
     * Gets a charsets array and their quality accepted by the browser/client from _SERVER["HTTP_ACCEPT_CHARSET"]
     */
	public function getClientCharsets() -> var
	{
        return this->_getQualityHeader("HTTP_ACCEPT_CHARSET", "charset");
	}

	/**
     * Gets best charset accepted by the browser/client from _SERVER["HTTP_ACCEPT_CHARSET"]
     */
	public function getBestCharset() -> string
	{
        return this->_getBestQuality(this->getClientCharsets(), "charset");
	}

	/**
     * Gets languages array and their quality accepted by the browser/client from _SERVER["HTTP_ACCEPT_LANGUAGE"]
     */
	public function getLanguages() -> array
	{
        return this->_getQualityHeader("HTTP_ACCEPT_LANGUAGE", "language");
	}

	/**
     * Gets best language accepted by the browser/client from _SERVER["HTTP_ACCEPT_LANGUAGE"]
     */
	public function getBestLanguage() -> string
	{
        return this->_getBestQuality(this->getLanguages(), "language");
	}


	/**
     * Gets auth info accepted by the browser/client from $_SERVER['PHP_AUTH_USER']
     */
	public function getBasicAuth() -> array | null
	{
        var auth;

        if isset _SERVER["PHP_AUTH_USER"] && isset _SERVER["PHP_AUTH_PW"] {
        let auth = [];
			let auth["username"] = _SERVER["PHP_AUTH_USER"];
			let auth["password"] = _SERVER["PHP_AUTH_PW"];
			return auth;
		}

		return null;
	}

	/**
     * Gets auth info accepted by the browser/client from $_SERVER['PHP_AUTH_DIGEST']
     */
	public function getDigestAuth() -> array
	{
        var digest, matches, match;
		array auth;

		let auth = [];
		if fetch digest, _SERVER["PHP_AUTH_DIGEST"] {
        let matches = [];
			if !preg_match_all("#(\\w+)=(['\"]?)([^'\" ,]+)\\2#", digest, matches, 2) {
				return auth;
			}
			if typeof matches == "array" {
            for match in matches {
                let auth[match[1]] = match[3];
				}
        }
		}

		return auth;
	}

}