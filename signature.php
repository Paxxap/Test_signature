<? $main_color = $color->getColor();?>
<div style="color: <? echo $main_color ?> ">
	<p>___</p>
	<p> С уважением, <br> 
	<? echo("$this->surname"." "."$this->name. "."$this->father_name."); ?> </p>
	<p> Тел <br>
	<?
		foreach($this->phones as $value)
		{
			echo("<a style='color:"."$main_color"."' href='tel:"."$value"."'>"."$value"."</a> <br>");
		}
	?>
	</p>
	<p>Email <br>
	<?
		foreach($this->emails as $value)
		{
			echo("<a style='color:"."$main_color"."'href='mailto:"."$value"."'>"."$value"."</a>"."<br>");
		}
	?></p>
	<p>___</p>
</div>
