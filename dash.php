
<?php
error_reporting(E_ALL | E_STRICT);

session_start();

if(!empty($_SESSION['loggedIn'])) {

?>

<!DOCTYPE HTML>  
<html>

<body>

<a href="index.html" title="Home">HOME from logged</a>

<div class='tableauPlaceholder' id='viz1605725927785' style='position: relative'>
<noscript>
<a href='#'>
<img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;th&#47;th_rd_ss_pool&#47;Dashboard1d&#47;1_rss.png' style='border: none' />
</a>
</noscript>
<object class='tableauViz'  style='display:none;'>
<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
<param name='embed_code_version' value='3' />
<param name='site_root' value='' />
<param name='name' value='th_rd_ss_pool&#47;Dashboard1d' />
<param name='tabs' value='yes' />
<param name='toolbar' value='yes' />
<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;th&#47;th_rd_ss_pool&#47;Dashboard1d&#47;1.png' />
<param name='animate_transition' value='yes' />
<param name='display_static_image' value='yes' />
<param name='display_spinner' value='yes' />
<param name='display_overlay' value='yes' />
<param name='display_count' value='yes' />
<param name='language' value='en' />
</object>
</div>
<script type='text/javascript'>                    var divElement = document.getElementById('viz1605725927785');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='1000px';vizElement.style.height='850px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='1000px';vizElement.style.height='850px';} else { vizElement.style.width='100%';vizElement.style.height='2450px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>

</body>
</html>

<?php
    }
    else { 
?>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>

<h1 align = "center">Unfortunately, you will need to be logged in to view this section!<h1>
<a href="index.html" title="Home">HOME from logged</a>

</body>
</html>
<?php
    }
    session_destroy();

?>
