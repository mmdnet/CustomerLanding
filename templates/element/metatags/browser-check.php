 <?php 

 $browser = new Browser();
 
 if( $browser->getBrowser() == Browser::BROWSER_IE && $browser->getVersion() >= 7 ) 
    {
        $html_tag = '<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="eng">';
        echo $html_tag;
    }
    elseif( $browser->getBrowser() == Browser::BROWSER_IE && $browser->getVersion() >= 8 ) 
    {
        $html_tag = '<html class="no-js lt-ie9 lt-ie8" lang="eng"';
        echo $html_tag;
        echo '<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>';

    }
    elseif( $browser->getBrowser() == Browser::BROWSER_IE && $browser->getVersion() >= 9 ) 
    {
        $html_tag = ' <html class="no-js lt-ie9" lang="eng"';
        echo $html_tag;
    }
    else 
    {
        $html_tag = ' <html class="no-js">';
        echo $html_tag;
    }