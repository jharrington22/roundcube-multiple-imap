<?php

class multi_imap_select
{
    // Check whether domain is on hosta.com or hostb.com
    public static function returnhost($domain)
    {
        // Array of domains on hosta.com
        $domains_new_server = array( 'clienta.com',
            'clientb.com'
        );
        
        $domain_pattern = '/' . $domain . '/i';

        // Return true if domain is on hosta.com else return false (hostb.com)
        if ( preg_grep($domain_pattern, $domains_new_server)) {
            return true;
        }
        else { 
            return false;
        }
    }
}
