<div class="container">
    <div class="page-header">
        <h1>添加下载</h1>
    </div>
    <form class="form-set" role="form" action="doadd.php?action=add" method="post">

        <div class="form-group">
            <label>标题</label>
            <input class="form-control" name="title" >
        </div>

        <div class="form-group">
            <label>分类</label> </br>
            <select name="cate" class="selectpicker" data-style="btn-info" >
                <?php
                $cate_sql =" SELECT * FROM `bd_cate` ";
                $query = mysql_query($cate_sql);
                while ($rs = mysql_fetch_array($query)){
                ?>
                <option value="<?php echo $rs['cate_id']; ?>"><?php echo $rs['cate_name']; ?></option>   <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>下载链接</label>
            <input class="form-control" name="downlink" >
        </div>

        <div class="form-group">
            <label>大小</label>
            <input class="form-control" name="downsize" >
        </div>


        <div class="form-group">
            <label>详情</label>
            <textarea class="form-control" name="downinfo" rows="3"></textarea>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">添加</button>
    </form>

</div>

