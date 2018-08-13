<?php
/**
 * Created by PhpStorm.
 * User: prasanjeet
 * Date: 3/30/18
 * Time: 8:08 AM
 */

class FilingGenerics
{
public static $serviceType=array(
    'servicety1'=>'S Corporation',
    'servicety2'=>'C Corporation',
    'servicety3'=>'Limited Liability Company (LLC)',
    'servicety4'=>'Limited Liability Partnership (LLP)',
    'servicety5'=>'Limited Partnership (LP)',
    'servicety6'=>'Fictitious Business Name (DBA)',
    'servicety7'=>'USDOT #',
    'servicety8'=>'MC # Carrier Authority',
    'servicety9'=>'MC # Broker Authority',
    'servicety10'=>'Freight Forwarder (FF #)',
    'servicety11'=>'California DOT # (CA #)',
    'servicety12'=>'Motor Carrier Permit (MCP)',
    'servicety13'=>'Employee Pull Notice (EPN)',
    'servicety14'=>'Hazardous Materials Registration (CA)',
    'servicety15'=>'Hazardous Materials Registration (Federal)',
    'servicety16'=>'BOC-3',
    'servicety17'=>'International Fuel Tax Agreement (IFTA)',
    'servicety18'=>'Highway Use Tax (2290)',
    'servicety19'=>'Unified Carrier Registration (UCR)',
    'servicety20'=>'Texas Operating Authority',
    'servicety21'=>'BMC-84 Surety Bond',
    'servicety22'=>'BMC-85 Trust Bond',
    'servicety23'=>'International Registration Plan (IRP)',
    'servicety24'=>'New Mexico Weight Distance Permit',
    'servicety25'=>'Oregon Fuel Tax Permit',
    'servicety26'=>'New York HUT Permit',
    'servicety27'=>'KYU Weight Distance Permit',
    'servicety28'=>'Biennial Update',
    'servicety29'=>'MC# Reinstatement',
    'servicety30'=>'MC# Detachment',
    'servicety31'=>'MC# Revocation',
    'servicety32'=>'MC# Name Change',
    'servicety33'=>'MC# Reattachment',
    'servicety34'=>'USDOT# Reactivation',
    'servicety35'=>'USDOT# Deactivation'
);

    public static $serviceTypeFile=array(
      /*  'servicety1'=>'S Corporation',
        'servicety2'=>'C Corporation',
        'servicety3'=>'Limited Liability Company (LLC)',
        'servicety4'=>'Limited Liability Partnership (LLP)',
        'servicety5'=>'Limited Partnership (LP)',
        'servicety6'=>'Fictitious Business Name (DBA)',
        'servicety7'=>'USDOT #',
        'servicety8'=>'MC # Carrier Authority',
        'servicety9'=>'MC # Broker Authority',
        'servicety10'=>'Freight Forwarder (FF #)',
        'servicety11'=>'California DOT # (CA #)',
        'servicety12'=>'Motor Carrier Permit (MCP)',
        'servicety13'=>'Employee Pull Notice (EPN)',
        'servicety14'=>'Hazardous Materials Registration (CA)',
        'servicety15'=>'Hazardous Materials Registration (Federal)',
        'servicety16'=>'BOC-3',
        'servicety17'=>'International Fuel Tax Agreement (IFTA)',
        'servicety18'=>'Highway Use Tax (2290)',
        'servicety19'=>'Unified Carrier Registration (UCR)',
        'servicety20'=>'Texas Operating Authority',
        'servicety21'=>'BMC-84 Surety Bond',
        'servicety22'=>'BMC-85 Trust Bond',
        'servicety23'=>'International Registration Plan (IRP)',
        'servicety24'=>'New Mexico Weight Distance Permit',
        'servicety25'=>'Oregon Fuel Tax Permit',
        'servicety26'=>'New York HUT Permit',
        'servicety27'=>'KYU Weight Distance Permit',
        'servicety28'=>'Biennial Update',
        'servicety29'=>'MC# Reinstatement',*/
        'servicety30'=>'MC# Detachment', //asda
        /*'servicety31'=>'MC# Revocation',
        'servicety32'=>'MC# Name Change',*/
        'servicety33'=>'MC# Reattachment',// file
        /*'servicety34'=>'USDOT# Reactivation',
        'servicety35'=>'USDOT# Deactivation'*/
    );

    public static function showDate($dispDate){

        return date('m/d/Y h:i:s A', strtotime($dispDate));
    }

    public static function getuserRole($username)
    {
        if(!(isset($username) && !empty($username)) )
        {
            return 0;
        }
        $userDetail=DotTrackerUser::model()->findByAttributes(array('username'=>$username));

        return $userDetail->role;


    }

    public static function getUserName($username)
    {
        if(!(isset($username) && !empty($username)) )
        {
            return 0;
        }
        $userDetail=DotTrackerUser::model()->findByAttributes(array('username'=>$username));

        return $userDetail->fname.' '.$userDetail->lname;

    }

    public static function getUserPhone($username)
    {
        if(!(isset($username) && !empty($username)) )
        {
            return 0;
        }
        $userDetail=DotTrackerUser::model()->findByAttributes(array('username'=>$username));

        return $userDetail->phone;

    }

    public static function getuserId($username)
    {
        if(!(isset($username) && !empty($username)) )
        {
            return 0;
        }
        $userDetail=DotTrackerUser::model()->findByAttributes(array('username'=>$username));

        return $userDetail->id;


    }

    public static function getAuthEmail($username)
    {
        if(!(isset($username) && !empty($username)))
        {
            return false;
            die;
        }

        $userDetail=DotTrackerUser::model()->findByAttributes(array('username'=>$username));

        return $userDetail->email;



    }

    public static function getFirstName($name)
    {
        if(!empty($name)) {
            return explode(" ", $name)[0];
        }
        else{
            return 'Customer';
        }
    }


    public static function showEpnId($id)
    {
        return $id.'-EPN';
    }

    public static function showAemailId($id)
    {
        return $id.'-AEM';
    }

    public static function showQuoteId($id)
    {
        return $id.'-FMQ';
    }

    public static function showOrderId($id)
    {
        return $id.'-OD';
    }

    public static function showCCid($id)
    {
        return $id.'-CCA';
    }

    public static function showMcId($id)
    {
        return $id.'-MC';
    }

    public static function showPhone($data){
        return '('.substr($data, 0, 3).') '.substr($data, 3, 3).'-'.substr($data,6);
    }

    public static function showDAmt($amt)
    {
        //return '$'.$amt;
        if($amt=='0')
        {
            return '--';
        }
        return $amt;
    }

    public static function showAmt($amt)
    {
        return '$'.$amt;

    }

    public static function encryptKey($id)
    {
        $key='asdsajhkgjfhgsagdja234dsdssajgdnvsd213';
        $val=$id.$key;
        return base64_encode($val);

    }

    public static function decryptKey($id)
    {
        $key='asdsajhkgjfhgsagdja234dsdssajgdnvsd213';
        return str_replace($key,'',base64_decode($id));

    }

    public static function getQuoteID($id)
    {
        $Credit=CreditCardAuthorization::model()->findByPk($id);
        $Order=DotTrackerOrder::model()->findByPk($Credit->order_id);
        $Quote=DotTrackerQuote::model()->findByPk($Order->quote_id);
        return($Quote->id);

    }
    public static function showServiceType($id)
    {
        $DotTrackerQuote=DotTrackerQuote::model()->findByPk($id);
        $allData=CJSON::decode($DotTrackerQuote->arrdata);
        $txt='';

        foreach ($allData as $data)
        {
//            print_r($data);

            $txt=$txt.'<li style="list-style: none;"> <b>'.self::$serviceType[$data['id']].'</b> (Tariff : '.$data['amt'].')</li>';
        }

       // die;
        return $txt;

    }

    public static function parseServiceType($txt)
    {
        $arrs=json_decode($txt);
        $newArr=array();
        foreach($arrs as $arr)
        {
           array_push($newArr,self::$serviceType[$arr->id]);
        }

        return implode('<br>',$newArr);



    }


    public static function getAllUsers()
    {
        $userArr=array();
        $allUser=DotTrackerUser::model()->findAll();
        $option='';

        foreach($allUser as $user)
        {
            $userArr[$user['id']]=$user['username'];

        }
       // echo  $option;

       // return $userArr;


    }


    public static function getUserList()
    {
        $models = DotTrackerUser::model()->findAll(array('order' => 'username DESC'));
        return CHtml::listData($models,'username', 'username');
    }




}