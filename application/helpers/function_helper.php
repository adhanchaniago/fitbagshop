<?php if(!defined('BASEPATH')) exit('Wadepley');

if (!function_exists('http_response_code')) {
    function http_response_code($code = NULL) {

        if ($code !== NULL) {

            switch ($code) {
                case 100: $text = 'Continue'; break;
                case 101: $text = 'Switching Protocols'; break;
                case 200: $text = 'OK'; break;
                case 201: $text = 'Created'; break;
                case 202: $text = 'Accepted'; break;
                case 203: $text = 'Non-Authoritative Information'; break;
                case 204: $text = 'No Content'; break;
                case 205: $text = 'Reset Content'; break;
                case 206: $text = 'Partial Content'; break;
                case 300: $text = 'Multiple Choices'; break;
                case 301: $text = 'Moved Permanently'; break;
                case 302: $text = 'Moved Temporarily'; break;
                case 303: $text = 'See Other'; break;
                case 304: $text = 'Not Modified'; break;
                case 305: $text = 'Use Proxy'; break;
                case 400: $text = 'Bad Request'; break;
                case 401: $text = 'Unauthorized'; break;
                case 402: $text = 'Payment Required'; break;
                case 403: $text = 'Forbidden'; break;
                case 404: $text = 'Not Found'; break;
                case 405: $text = 'Method Not Allowed'; break;
                case 406: $text = 'Not Acceptable'; break;
                case 407: $text = 'Proxy Authentication Required'; break;
                case 408: $text = 'Request Time-out'; break;
                case 409: $text = 'Conflict'; break;
                case 410: $text = 'Gone'; break;
                case 411: $text = 'Length Required'; break;
                case 412: $text = 'Precondition Failed'; break;
                case 413: $text = 'Request Entity Too Large'; break;
                case 414: $text = 'Request-URI Too Large'; break;
                case 415: $text = 'Unsupported Media Type'; break;
                case 500: $text = 'Internal Server Error'; break;
                case 501: $text = 'Not Implemented'; break;
                case 502: $text = 'Bad Gateway'; break;
                case 503: $text = 'Service Unavailable'; break;
                case 504: $text = 'Gateway Time-out'; break;
                case 505: $text = 'HTTP Version not supported'; break;
                default:
                    exit('Unknown http status code "' . htmlentities($code) . '"');
                break;
            }

            $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

            header($protocol . ' ' . $code . ' ' . $text);

            $GLOBALS['http_response_code'] = $code;

        } else {

            $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);

        }

        return $code;

    }
}

if ( ! function_exists('check_login'))
{
function check_login(){
  if(isset($_COOKIE['pajon_username']) && isset($_COOKIE['pajon_password']))return 1;
  else return 0;

}}

if ( ! function_exists('find2'))
{
	/**
	 * [find2 description]
	 *
	 * @param     [type]    $column    [description]
	 * @param     [type]    $data      [description]
	 * @param     [type]    $data_2    [description]
	 * @param     [type]    $table     [description]
	 * @return    [type]
	 * @author guntur <guntur@wamplo.com>
	 */
	function find2($column, $clause, $value, $table) {
		$CI =& get_instance();
		$CI->load->database();

		$CI->db->select($column);
		$CI->db->from($table);
		$CI->db->where($clause, $value);

		$result = $CI->db->get()->row_array();

		if(!empty($result))
			return $result[$column];
		else
			return FALSE;
	}
}

if ( ! function_exists('count_all_admin'))
{
	function count_all_admin()
	{
		$CI =& get_instance();
		$CI->db->select('id');
		$CI->db->from('tb_users');

		return $query = $CI->db->count_all_results();
	}
}

if ( ! function_exists('count_all_comments'))
{
	function count_all_comments()
	{
		$CI =& get_instance();
		$CI->db->select('id');
		$CI->db->from('tb_post_comments');

		return $query = $CI->db->count_all_results();
	}
}

if ( ! function_exists('count_all_posts'))
{
	function count_all_posts()
	{
		$CI =& get_instance();
		$CI->db->select('id');
		$CI->db->from('tb_post');

		return $query = $CI->db->count_all_results();
	}
}

if ( ! function_exists('count_all_portfolios'))
{
	function count_all_portfolios()
	{
		$CI =& get_instance();
		$CI->db->select('id');
		$CI->db->from('tb_portfolio');

		return $query = $CI->db->count_all_results();
	}
}

if ( ! function_exists('quote'))
{
	/**
	 * [get_bank_list description]
	 *
	 * @return    [type]
	 * @author guntur <guntur@wamplo.com>
	 */
	function quote() {
		$CI =& get_instance();
		// $CI->load->database();
			$CI->db->select('*');
			$CI->db->from('tb_setting');
			$CI->db->where('setting_key', 'QUOTE');
			
			$result = $CI->db->get()->row_array();
			
			if(!empty($result))
				return $result['setting_val'];
			else
				return '';
	}
}

if ( ! function_exists('get_kuota'))
{
	/**
	 * [get_bank_list description]
	 *
	 * @return    [type]
	 * @author guntur <guntur@wamplo.com>
	 */
	function get_kuota($kode_lokasi) {
		$CI =& get_instance();
		// $CI->load->database();
			$CI->db->select('*');
			$CI->db->from('tb_produk_lokasi');
			$CI->db->where('kode_lokasi', $kode_lokasi);
			
			$result = $CI->db->get()->row_array();			
			return $result;
	}
}

if ( ! function_exists('reg_fee'))
{
	/**
	 * [get_bank_list description]
	 *
	 * @return    [type]
	 * @author guntur <guntur@wamplo.com>
	 */
	function reg_fee() {
		$CI =& get_instance();
		// $CI->load->database();
			$CI->db->select('*');
			$CI->db->from('tb_setting');
			$CI->db->where('setting_key', 'REG_PAY');
			
			$result = $CI->db->get()->row_array();
			
			if(!empty($result))
				return $result['setting_val'];
			else
				return '';
	}
}


if ( ! function_exists('get_setting'))
{
	/**
	 * [get_bank_list description]
	 *
	 * @return    [type]
	 * @author guntur <guntur@wamplo.com>
	 */
	function get_setting($key) {
		$CI =& get_instance();
		// $CI->load->database();
			$CI->db->select('*');
			$CI->db->from('tb_setting');
			$CI->db->where('setting_key', $key);
			
			$result = $CI->db->get()->row_array();
			
			if(!empty($result))
				return $result['setting_val'];
			else
				return '';
	}
}

if ( ! function_exists('penomoran'))
{
	/**
	 * [get_bank_list description]
	 *
	 * @return    [type]
	 * @author guntur <guntur@wamplo.com>
	 */
	function penomoran($kode) {
		$CI =& get_instance();
		// $CI->load->database();
			$CI->db->select('*');
			$CI->db->from('tb_penomoran');
			$CI->db->where('kode', $kode);
			$CI->db->order_by('id', 'desc');
			
			$result = $CI->db->get()->row_array();
			
			if(!empty($result)) {

				$cur_no = $result['current_no']+1;
				$kode = $result['kode'];

				// Check format
				if(strlen($cur_no) == 1) {
					$thenumber = $kode.'0000000'.$cur_no;
				} else if(strlen($cur_no) == 2) {
					$thenumber = $kode.'000000'.$cur_no;
				} else if(strlen($cur_no) == 3) {
					$thenumber = $kode.'00000'.$cur_no;
				} else if(strlen($cur_no) == 4) {
					$thenumber = $kode.'0000'.$cur_no;
				} else if(strlen($cur_no) == 5) {
					$thenumber = $kode.'000'.$cur_no;
				} else if(strlen($cur_no) == 6) {
					$thenumber = $kode.'00'.$cur_no;
				} else if(strlen($cur_no) == 7) {
					$thenumber = $kode.'0'.$cur_no;
				} else if(strlen($cur_no) == 8) {
					$thenumber = $kode.$cur_no;
				}

				// Update current number
				$CI->db->update('tb_penomoran', array(
					'current_no' 	=> $cur_no
				), array('kode'   	=> $kode));

				return $thenumber;

			} else {
				return '';
			}
	}
}

function DeletePath($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
            DeletePath(realpath($path) . '/' . $file);
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}

function kode_produk($brand_ID)
{	
	$CI =& get_instance();
	// $CI->load->database();
		$CI->db->select('*');
		$CI->db->from('tb_produk_master');
		$CI->db->order_by('id', 'desc');
		
		$result = $CI->db->get()->row_array();
		$now_id = $result['id'] + 1;

		if(strlen($now_id) == 1) {
			$thenumber = '00000'.$now_id;
		} else if(strlen($now_id) == 2) {
			$thenumber = '0000'.$now_id;
		} else if(strlen($now_id) == 3) {
			$thenumber = '000'.$now_id;
		} else if(strlen($now_id) == 4) {
			$thenumber = '00'.$now_id;
		} else if(strlen($now_id) == 5) {
			$thenumber = '0'.$now_id;
		} else {
			$thenumber = $now_id;
		}

	$kode_produk = date('Ymd').$brand_ID.$thenumber;
	return $kode_produk;
}


############################################################## String ########################################################
if ( ! function_exists('make_alias'))
{
	function make_alias($string)
	{
		$string = strtolower($string);

		$string = str_replace('&','and',$string);

		$string = preg_replace('/[^a-z0-9]/', "-", $string);

		$string = trim($string);

		$string = str_replace('---','-',$string);
		$string = str_replace('--','-',$string);

		return $string;
	}
}

if(!function_exists('short_string')) 
{
	function short_string($string, $count = FALSE) 
	{
		$jumlah = 150;
		if($count) { $jumlah = $count; }
		$text = (substr($string, 0, $jumlah));
		$kata_lengkap = strrpos($text, ' ');
		return $content=substr($text, 0, $kata_lengkap)."...";
	}
}

if(!function_exists('plus_minus')) 
{
	function plus_minus($string) 
	{
		$vowels = array("-", "+");
		$onlyconsonants = str_replace($vowels, "", $string);
		return $onlyconsonants;
	}
}

if ( ! function_exists('make_alias_plus'))
{
	function make_alias_plus($string)
	{
		$string = strtolower($string);

		$string = str_replace(' ','+',$string);
		
		$string = str_replace('<br>','+',$string);
		$string = str_replace('<br />','+',$string);
		$string = str_replace('<br/>','+',$string);

		$string = trim($string);

		$string = str_replace('---','+',$string);
		$string = str_replace('--','+',$string);

		return $string;
	}
}
############################################################### End String ####################################################

############################################################### Calculator ####################################################

if(!function_exists('calculate_percentage')) {
	function calculate_percentage($req_pinjaman, $get_pinjaman)
	{
		$total = ($get_pinjaman/$req_pinjaman)*100;
		if($total > 100) { $total = 100; }
		return number_format($total,0,'','');
	}
}

if(!function_exists('calculate_days')) {	
	function calculate_days($date)
	{
		$nowdate = date('Y-m-d');
		$date1=date_create($nowdate);
		$date2=date_create($date);
		$diff=date_diff($date1,$date2);
		
		// shows the total amount of days (not divided into years, months and days like above)
		$result = $diff->format("%R%a");
		return $result;
	}
}

if(!function_exists('calculate_minute')) {
	function calculate_minute($date)
	{
		$datetime1 = date('Y-m-d H:i:s');
		$datetime2 = $date;
		$interval  = abs($datetime1 - $datetime2);
		$minutes   = round($interval / 60);
		return $minutes; 
	}
}

########################################################### End Calculator #####################################################


if ( ! function_exists('compressor'))
{
	function compressor($source, $destination, $quality) {
		$info = getimagesize($source); if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source);
		else if ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source);
		else if ($info['mime'] == 'image/png') $image = imagecreatefrompng($source);
		imagejpeg($image, $destination, $quality);
		return $destination;
	}
}

if ( ! function_exists('status_selected'))
{
	function status_selected($status , $flag )
	{
		if($status == $flag) echo 'selected="selected"';
	}
}


if ( ! function_exists('get_image_size')) {
	function get_image_size ($image)
    {
        $imgData = getimagesize($image);
        $retval['width'] = $imgData[0];
        $retval['height'] = $imgData[1];
        $retval['mime'] = $imgData['mime'];
        return $retval;
    }
}


if ( ! function_exists('esc')) //alias: mysql_real_escape_string()
{
	function esc($string)
	{
		$result=mysql_real_escape_string($string);
		return $result;
	}
}

if ( ! function_exists('money'))
{
	function money($input, $suffix = ',-')
	{
		return 'Rp '.number_format($input, '0', ',', '.').$suffix;
	}
}

if ( ! function_exists('kmb1'))
{
	function kmb1($input)
	{
		if ($input < 1000000) {
			// Anything less than a million
			$n_format = number_format($input/1000);
		} else if ($input < 1000000000) {
			// Anything less than a billion
			$n_format = number_format($input / 1000000);
		} else {
			// At least a billion
			$n_format = number_format($input / 1000000000);
		}
		return $n_format;
	}
}

if ( ! function_exists('kmb2'))
{
	function kmb2($input)
	{
		if ($input < 1000000) {
			// Anything less than a million
			$n_format = 'rb';
		} else if ($input < 1000000000) {
			// Anything less than a billion
			$n_format = 'jt';
		} else {
			// At least a billion
			$n_format = 'm';
		}
		return $n_format;
	}
}

if ( ! function_exists('kelipatan'))
{
	function kelipatan($input)
	{
		if ($input < 1000000) {
			// Anything less than a million
			$n_format = 'Rp '.($input/1000).' '.kmb2($input);
		} else if ($input < 1000000000) {
			// Anything less than a billion
			$n_format = 'Rp '.($input/1000000).' '.kmb2($input);
		} else {
			// At least a billion
			$n_format = 'Rp '.($input/1000000000).' '.kmb2($input);
		}
		return $n_format;
	}
}

if ( ! function_exists('nominal'))
{
	function nominal($input)
	{
		if ($input == 0) {
			// Anything less than a million
			$n_format = '';
		} else if ($input == 1) {
			// Anything less than a billion
			$n_format = '000';
		} else if ($input == 2) {
		// Anything less than a billion
		$n_format = '000000';
		} else if ($input == 3) {
		// Anything less than a billion
		$n_format = '000000000';
		} else if ($input == 4) {
		// Anything less than a billion
		$n_format = '000000000000000';
		} else if ($input == 5) {
		// Anything less than a billion
		$n_format = '000000000000000000';
		}
		return $n_format;
	}
}

if ( ! function_exists('pre'))
{
	function pre($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}
}

if ( ! function_exists('header_json'))
{
	function header_json()
	{
		header('Content-Type: application/json');
	}
}


if ( ! function_exists('get_alias_id'))
{
	function get_alias_id($table,$alias)
	{
		$q="select id from `".esc($table)."` where `alias`='".strtolower(esc($alias))."'";
		$result=mysql_fetch_assoc(mysql_query($q));

		return $result['id'];
	}
}

if ( ! function_exists('mailer'))
{
	function mailer($subject,$message,$from,$to,$cc='',$bcc='') {

		$CI =& get_instance();
		$CI->load->library('email');

		$CI->email->from($from);
		$CI->email->to($to);

		if($cc!='')
		$CI->email->cc($cc);

		if($bcc!='')
		$CI->email->bcc($bcc);

		$CI->email->subject($subject);

		$CI->email->message($message);
		//$CI->email->send();
		//echo $CI->email->print_debugger();

	}
}

if ( ! function_exists('find'))
{
	/**
	 * [find description]
	 *
	 * @param     [type]    $coloumn    [description]
	 * @param     [type]    $id         [description]
	 * @param     [type]    $table      [description]
	 * @return    [type]
	 * @author guntur <guntur@wamplo.com>
	 */
	function find($column, $id, $table) {
		$CI =& get_instance();
		$CI->load->database();

		$CI->db->select($column);
		$CI->db->from($table);
		$CI->db->where('id', $id);

		$result = $CI->db->get()->row_array();

		if(!empty($result))
			return $result[$column];
		else
			return FALSE;
	}
}

if ( ! function_exists('getSizeImage'))
{	function getSizeImage ($image)
    {
        $imgData = getimagesize($image);
        $retval['width'] = $imgData[0];
        $retval['height'] = $imgData[1];
        $retval['mime'] = $imgData['mime'];
        return $retval;
    }
}

if ( ! function_exists('format_date')){
	function format_date($date){
		if($date!='0000-00-00')
		return date("d-M-Y",strtotime($date));
		else return '-';
	}
}

if ( ! function_exists('format_date_eng')){
	function format_date_eng($date){
		if($date!='0000-00-00') {
			$date = str_replace('/', '-', $date);
			return date("Y-m-d",strtotime($date));
		} else { return '-'; }
	}
}

if ( ! function_exists('format_date_time')){
	function format_date_time($date){
		if($date!='0000-00-00 00:00:00')
		return date("d M Y H:i",strtotime($date));
		else return '-';
	}
}

if ( ! function_exists('format_date_timeline')){
	function format_date_timeline($date){
		if($date!='0000-00-00 00:00:00')
		return date("M d H:i a",strtotime($date));
		else return '-';
	}
}

if ( ! function_exists('json_status')){
	function json_status($status=0,$msg='error'){
		return json_encode(array('status'=>$status,'message'=>$msg));
	}
}


if ( ! function_exists('isJSON')){
function isJSON($string){
   return is_string($string) && is_object(json_decode($string)) && (json_last_error() == JSON_ERROR_NONE) ? 1 : 0;
}

}

if ( ! function_exists('admin_url')){

	function admin_url($url = null)
	{		
		return base_url()."myadmin/" . ($url ? $url : '');
	}

}


function limit_char($str, $limit)
{
	if (strlen($str) > $limit)
		$str = substr($str, 0, $limit) . '...';

	return $str;
}


function stripBBCode($input) {

	$preg = array(
		# Img
		'/\[img(?::\w+)?\](.*?)\[\/img(?::\w+)?\]/si' => " ",
		# Youtube
		'/\[youtube(?::\w+)?\](.*?)\[\/youtube(?::\w+)?\]/si' => " ",
		'|[[\/\!]*?[^\[\]]*?]|si' => " ",
		'/\n+/' => " ",
	);

	return preg_replace('/\n\n+/', ' ', preg_replace(array_keys($preg), array_values($preg), $input));
}

function ucname($string) {
    $string =ucwords(strtolower($string));

    foreach (array('-', '\'') as $delimiter) {
      if (strpos($string, $delimiter)!==false) {
        $string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
      }
    }
    return $string;
}


############################################################# Status Definer ###################################################

// Function status db
if(!function_exists('status')) {
	function status($status)
	{  
		if($status == 0) { $state = '<span class="label label-sm label-danger">Not Active</span>'; } else 
		if($status == 1) { $state = '<span class="label label-sm label-success">Active</span>'; } else 
		if($status == 2) { $state = '<span class="label label-sm label-info">Draft</span>'; }
		
		return $state;
	}
}

// Function portfolio status
if(!function_exists('porto_status')) {
	function porto_status($status)
	{  
		if($status == 0) { $state = '<span class="label label-sm label-danger">Not Active</span>'; } else 
		if($status == 1) { $state = '<span class="label label-sm label-success">On Going</span>'; } else 
		if($status == 2) { $state = '<span class="label label-sm label-info">Complete</span>'; }
		
		return $state;
	}
}


############################################################# End Status Definer ###############################################

