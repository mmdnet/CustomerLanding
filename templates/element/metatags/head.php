<head>
    <?php new KeywordsController(); ?>
    <?php $keywords = Keywords->metatags(); ?>

    <?php echo $this->Meta->keywords('Webhosting, 
                                      Domain Name, 
                                      web designer sacramento, 
                                      webpage design sacramento, 
                                      build a website sac, 
                                      sacramento web designers, 
                                      best sacramento web designers,
                                      web design agency sacramento'); ?>

    <?php echo $this->Meta->keywords('Marketing, 
                                      Search engine optimization, 
                                      SEO, 
                                      content strategy, 
                                      social media marketing sacramento, 
                                      social media campaign sacramento, 
                                      campaign management sacramento, 
                                      marketing director sacramento'); ?>
    
    <?php echo $this->Meta->description('Man Made Digital is a full stack modern marketing 
                                        agency that helps local businesses strengthen their 
                                        online presence by providing the tools necessary to 
                                        create winning digital marketing strategies and dominiate 
                                        the competition.  Accelerate your growth, reach new heights, 
                                        achieve your goals.'); ?>

    <?php echo $this->Meta->robots(['index' => false]); ?>
    <?php echo $this->Html->css('assets/css/fonticons.css'); ?>
    <?php echo $this->Html->css('assets/css/stylesheet.css'); ?>
    <?php echo $this->Html->css('assets/css/font-awesome.min.css'); ?>
    <?php echo $this->Html->css('assets/css/bootstrap-theme.min.css'); ?>
    <?php echo $this->Html->css('css/custom.css'); ?>
    <?php echo $this->Html->css('assets/css/plugins.css'); ?>
    <?php echo $this->Html->css('assets/css/style.css'); ?>
    <?php echo $this->Html->css('assets/css/responsive.css'); ?>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Google -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet'
        type='text/css'>-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;0,800;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;0,800;0,900;1,500&display=swap"
        rel="stylesheet">

    <!--Theme Responsive css-->

    <?php echo $this->Html->script('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'); ?>

</head>