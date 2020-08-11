<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>调查问卷-学生生活情况</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
 	<div class="top"></div>
	<div class="cont">
     	<h1>调查问卷（多选题）</h1>
         <?php
         	echo '<h5><span>发布者：feiyu</span><img src="images/email.png" width="16" height="11"><span>'.date("Y-m-d").' 有效答卷：118份</span></h5>';
		 
		 ?>   
    
    	<div class="tishi">此问卷处于停止状态，仅供浏览，请勿填写！</div>
    
    	<p>您好！欢迎参加调查，本次调查希望了解人们在不同人生阶段所关注（或需要面对）的问题。调查采用匿名方式，我们不会看到被调查对象的来源，请放心！感谢您的支持！
		  <br>一共10题，可多选。</p>
            
	  <form action="diaochajg.php" method="post">
        <div class="box">
        	<h3>1、在校时期，以下哪些事情会让您感觉到危机的存在？</h3>
            <ul>
            	<li><input name="dc1[]" type="checkbox" id="dc1[]" value="相貌（青春痘，皮肤）">相貌（青春痘，皮肤）</li>
                <li><input name="dc1[]" type="checkbox" value="体型（身高、身材）" id="dc1[]">体型（身高、身材）</li>
                <li><input name="dc1[]" type="checkbox" value="社交能力、交友不慎" id="dc1[]">社交能力、交友不慎</li>
                <li><input name="dc1[]" type="checkbox" value="没有足够的精力学习和运动" id="dc1[]">没有足够的精力学习和运动</li>
                <li><input name="dc1[]" type="checkbox" value="学习成绩不够好" id="dc1[]">学习成绩不够好</li>
                <li><input name="dc1[]" type="checkbox" value="生活自立能力不足" id="dc1[]">生活自立能力不足</li>
                <li><input name="dc1[]" type="checkbox" value="就业压力" id="dc1[]">就业压力</li>
                <li><input name="dc1[]" type="checkbox" value="经济拮据" id="dc1[]">经济拮据</li>
                <li><input name="dc1[]" type="checkbox" value="不能跟上时代潮流" id="dc1[]">不能跟上时代潮流</li>
            </ul>
        </div>
        <div class="box">
        	<h3>2、在事业基础阶段（毕业后至生育宝宝前），以下哪些事件会引起您的危机感？</h3>
            <ul>
            	<li><input name="dc2[]" type="checkbox" value="不够漂亮" id="dc2[]">不够漂亮</li>
                <li><input name="dc2[]" type="checkbox" value="找不到好工作" id="dc2[]">找不到好工作</li>
                <li><input name="dc2[]" type="checkbox" value="找不到好伴侣" id="dc2[]">找不到好伴侣</li>
                <li><input name="dc2[]" type="checkbox" value="人际关系" id="dc2[]">人际关系</li>
                <li><input name="dc2[]" type="checkbox" value="失眠、焦虑" id="dc2[]">失眠、焦虑</li>
                <li><input name="dc2[]" type="checkbox" value="脱发" id="dc2[]">脱发</li>
                <li><input name="dc2[]" type="checkbox" value="加班熬夜，健康透支" id="dc2[]">加班熬夜，健康透支</li>
                <li><input name="dc2[]" type="checkbox" value="癌症威胁（心理和饮食、调理）" id="dc2[]">癌症威胁（心理和饮食、调理）</li>
                <li><input name="dc2[]" type="checkbox" value="缺乏运动" id="dc2[]">缺乏运动</li>
                <li><input name="dc2[]" type="checkbox" value="体力不支" id="dc2[]">体力不支</li>
                <li><input name="dc2[]" type="checkbox" value="对家庭照顾不够" id="dc2[]">对家庭照顾不够</li>
                <li><input name="dc2[]" type="checkbox" value="家庭关系紧张" id="dc2[]">家庭关系紧张</li>
                <li><input name="dc2[]" type="checkbox" value="经济紧张" id="dc2[]">经济紧张</li>
                <li><input name="dc2[]" type="checkbox" value="购房问题" id="dc2[]">购房问题</li>
            </ul>
        </div>
        <div class="box">
        	<h3>3、您觉得作为父母或准父母及最担心的是什么？</h3>
            <ul>
            	<li><input name="dc3[]" type="checkbox" id="dc3[]" value="身高不足">身高不足</li>
                <li><input name="dc3[]" type="checkbox" value="视力不足" id="dc3[]">视力不足</li>
                <li><input name="dc3[]" type="checkbox" value="学习压力太大" id="dc3[]">学习压力太大</li>
                <li><input name="dc3[]" type="checkbox" value="性格缺陷" id="dc3[]">性格缺陷</li>
                <li><input name="dc3[]" type="checkbox" value="青春痘" id="dc3[]">青春痘</li>
                <li><input name="dc3[]" type="checkbox" value="营养过剩，导致身体肥胖" id="dc3[]">营养过剩，导致身体肥胖</li>
                <li><input name="dc3[]" type="checkbox" value="社交能力，人际关系" id="dc3[]">社交能力，人际关系</li>
                <li><input name="dc3[]" type="checkbox" value="身体健康" id="dc3[]">身体健康</li>
                <li><input name="dc3[]" type="checkbox" value="食品安全" id="dc3[]">食品安全</li>
            </ul>
        </div>
        <div class="box">
        	<h3>4、对于上中小学的孩子，您觉得家长会对哪些方面充满期待？</h3>
            <ul>
            	<li><input name="dc4[]" type="checkbox" value="学习成绩好" id="dc4[]">学习成绩好</li>
                <li><input name="dc4[]" type="checkbox" value="心理健康" id="dc4[]">心理健康</li>
                <li><input name="dc4[]" type="checkbox" value="身体健康" id="dc4[]">身体健康</li>
                <li><input name="dc4[]" type="checkbox" value="培养更多的学习以外的兴趣" id="dc4[]">培养更多的学习以外的兴趣</li>
                <li><input name="dc4[]" type="checkbox" value="异性交往" id="dc4[]">异性交往</li>
                <li><input name="dc4[]" type="checkbox" value="在校期间创业" id="dc4[]">在校期间创业</li>
                <li><input name="dc4[]" type="checkbox" value="能够参与打工" id="dc4[]">能够参与打工</li>
                <li><input name="dc4[]" type="checkbox" value="生活节俭" id="dc4[]">生活节俭</li>
            </ul>
        </div>
        <div class="box">
        	<h3>5、您觉得长者（70岁以上）可能面对的问题有哪些？</h3>
            <ul>
            	<li><input name="dc5[]" type="checkbox" value="咀嚼问题" id="dc5[]">咀嚼问题</li>
                <li><input name="dc5[]" type="checkbox" value="生活不能自理" id="dc5[]">生活不能自理</li>
                <li><input name="dc5[]" type="checkbox" value="无人照顾" id="dc5[]">无人照顾</li>
                <li><input name="dc5[]" type="checkbox" value="营养摄入不足" id="dc5[]">营养摄入不足</li>
                <li><input name="dc5[]" type="checkbox" value="血液循环不好" id="dc5[]">血液循环不好</li>
                <li><input name="dc5[]" type="checkbox" value="免疫力低下" id="dc5[]">免疫力低下</li>
                <li><input name="dc5[]" type="checkbox" value="老年痴呆" id="dc5[]">老年痴呆</li>
                <li><input name="dc5[]" type="checkbox" value="寂寞，情绪低落" id="dc5[]">寂寞，情绪低落</li>
                <li><input name="dc5[]" type="checkbox" value="经济紧张" id="dc5[]">经济紧张</li>
                <li><input name="dc5[]" type="checkbox" value="不要成为儿女负担" id="dc5[]">不要成为儿女负担</li>
                <li><input name="dc5[]" type="checkbox" value="家人的陪伴" id="dc5[]">家人的陪伴</li>
            </ul>
        </div>
        
        <div class="tijiao"><input type="submit" value="提交问卷"></div>
        <hr>
      </form>
		
    </div>
</body>
</html>