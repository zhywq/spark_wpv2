<?php
global $wiki_page_ID;
global $qa_page_ID;
global $project_page_ID;
global $ask_page_ID;
$wiki_page_ID = "?page_id=46";
$qa_page_ID = "?page_id=55";
$project_page_ID = "?page_id=62";

?>
<div class="footer" style="height:200px;background-color: #fafafa">
    <div style="height:2px;background-color: #fe642d"></div>
    <div style="height:3px;background-color: #ffe9e1"></div>

    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-9 col-xs-9" id="col9">
                <div class="col-md-3 col-sm-3 col-xs-3" style="padding: 0;margin-right: 3%;">
                    <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo("template_url") ?>/img/logo.png"
                                                             style="vertical-align:middle;padding:35px 0;float: left"></a>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-md-1 col-sm-1 col-xs-1" style="text-align: left;padding-top:20px;margin-right: 5%;">
                    <p style="font-size: medium;font-weight: bold;color: #fe642d;margin-top: 15px">导航</p>
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: #fafafa"><a
                                    href="<?php echo site_url() . $wiki_page_ID; ?>" style="margin-bottom: 5px">wiki</a>
                        </li>
                        <li class="list-group-item" style="background-color: #fafafa"><a
                                    href="<?php echo site_url() . $qa_page_ID; ?>" style="margin-bottom: 5px">问答</a>
                        </li>
                        <li class="list-group-item" style="background-color: #fafafa"><a
                                    href="<?php echo site_url() . $project_page_ID; ?>"
                                    style="margin-bottom: 5px">项目</a></li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-md-3 col-sm-3 col-xs-3" style="text-align: left;padding-top:20px;">
                    <p style="font-size: medium;font-weight: bold;color: #fe642d;margin-top: 15px">联系我们</p>
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: #fafafa"><p
                                    style="margin-bottom: 5px;color: gray">sparkspace@163.com</p></li>
                        <li class="list-group-item" style="background-color: #fafafa"><p
                                    style="margin-bottom: 5px;color: gray">2038448066</p></li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-md-2 col-sm-2 col-xs-2" style="padding-top:20px;">
                    <p style="font-size: medium;font-weight: bold;color: #fe642d;margin-top: 15px">友情链接</p>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="https://www.microduino.cn/">microduino官网</a></li>
                        <li class="list-group-item"><a href="https://cn.wordpress.org/">Wordpress</a></li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3" style="text-align: center;padding:0;">
                <img src="<?php bloginfo("template_url") ?>/img/address.png" style="margin-top: 35px;float:left;">
            </div>
            <div class="clearfix visible-xs"></div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
