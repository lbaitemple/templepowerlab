var iter=0;
$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
        //console.log("1");
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('focus', '.panel-footer input.chat_input', function (e) {
    var $this = $(this);
    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideDown();
        $('#minim_chat_window').removeClass('panel-collapsed');
        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '#new_chat', function (e) {
    var size = $( ".chat-window:last-child" ).css("margin-left");
     size_total = parseInt(size) + 400;
    alert(size_total);
    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
    clone.css("margin-left", size_total);
});
$(document).on('click', '#btn-chat', function (e) {
	var content = $(".msg_container_base").html();
	var input = $('.chat_input').val();
    //console.log(content);
    var strVar="";
strVar += " <div class=\"row msg_container base_sent\">";
strVar += "                        <div class=\"col-md-10 col-xs-10\">";
strVar += "                            <div class=\"messages msg_sent\">";
strVar += "                                <p>";
strVar += input;
strVar +="<\/p>";
strVar += "                                <time datetime=\"\"><\/time>";
strVar += "                            <\/div>";
strVar += "                        <\/div>";
strVar += "                        <div class=\"col-md-2 col-xs-2 avatar\">";
strVar += "                            <img src=\"http:\/\/www.bitrebels.com\/wp-content\/uploads\/2011\/02\/Original-Facebook-Geek-Profile-Avatar-1.jpg\" class=\" img-responsive \">";
strVar += "                        <\/div>";
strVar += "                    <\/div>";
if(input!="") {
$(".msg_container_base").append(strVar);




var questionsArray = $.map(q_exp1, function (value, key) { return { value: value, data: key }; });
var answersArray =$.map(a_exp1, function (value, key) { return { value: value, data: key }; });
//console.log(questionsArray);
input = input.replace(/\?|,/g, '');
console.log(input);

input = input.toLowerCase();
var res_input = input.split(" ");
var m=0;
var count =[];
var thresh = 0.8;
var rate = [];
questionsArray.forEach( function (value,key)
{
    count[m]=0;
    rate[m]=0;
    var question = value.value;//arrayItem.prop1 + 2;
    var index = value.data;
    question = question.replace(/\?|,/g, '');
    question = question.replace(/\.|,/g, '');
    question = question.toLowerCase();
    //console.log(question+"   "+index);
    var res_question = question.split(" ");
    
    for(var i=0; i<res_input.length; i++)
    	{
    		for (var j=0; j < res_question.length; j++) {
    			console.log(res_input[i]+"=++++="+res_question[j]);
			  if (res_input[i]==res_question[j])
			  count[m]++;
			}
    	}
    	
    console.log("count is "+count[m]+"l is" + res_input.length);
    rate[m]=count[m]/res_input.length;
    //console.log(rate[m]);
    m++;
    
});
var ind = rate.indexOf(Math.max.apply(Math, rate));
console.log(ind);
var max = Math.max.apply(Math, rate).toPrecision(5);
console.log(max);
var strVar1="";
strVar1 += "                    <div class=\"row msg_container base_receive\">";
strVar1 += "                        <div class=\"col-md-2 col-xs-2 avatar\">";
strVar1 += "                            <img src=\"images\/tutor.png\" class=\" img-responsive \">";
strVar1 += "                        <\/div>";
strVar1 += "                        <div class=\"col-md-10 col-xs-10\">";
strVar1 += "                            <div class=\"messages msg_receive\">";
strVar1 += "                                <p>";
//strVar1 += "I've found the closest answer to your question that has ";
//strVar1 += max*100;
//strVar1 += "% likelihood. Please click ";
////strVar1 += ind+1;
////strVar1 += "\">here</a> to view it.";
//strVar1 += "<a  data-toggle=\"modal\" data-target=\"#myModal";
//strVar1 += iter;
//strVar1 +="\">here<\/a>";
//strVar1 += "  Launch demo modal";
//strVar1 += " to view it.";

strVar1 += answersArray[ind].value;





strVar1 += "<\/p>";
strVar1 += "                                <time datetime=\"2009-11-13T20:00\"><\/time>";
strVar1 += "                            <\/div>";
strVar1 += "                        <\/div>";
strVar1 += "                    <\/div>";


//var strVar1="";




var strVar2="";
strVar2 += "                    <div class=\"row msg_container base_receive\">";
strVar2 += "                        <div class=\"col-md-2 col-xs-2 avatar\">";
strVar2 += "                            <img src=\"images\/tutor.png\" class=\" img-responsive \">";
strVar2 += "                        <\/div>";
strVar2 += "                        <div class=\"col-md-10 col-xs-10\">";
strVar2 += "                            <div class=\"messages msg_receive\">";
strVar2 += "                                <p>Not sure how to answer your question.  I will get back to you later.<\/p>";
strVar2 += "                                <time datetime=\"2009-11-13T20:00\"><\/time>";
strVar2 += "                            <\/div>";
strVar2 += "                        <\/div>";
strVar2 += "                    <\/div>";

var strVar3="";
strVar3 += "<div class=\"modal fade\" id=\"myModal";
strVar3 += iter;
strVar3 += "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">";
strVar3 += "										<div class=\"modal-dialog\">";
strVar3 += "											<div class=\"modal-content\">";
strVar3 += "												<div class=\"modal-header\">";
strVar3 += "													<button type=\"button\" class=\"close\" data-dismiss=\"modal\">";
strVar3 += "														<span aria-hidden=\"true\">&times;<\/span><span class=\"sr-only\">Close<\/span>";
strVar3 += "													<\/button>";
strVar3 += "													<h4 class=\"modal-title\" id=\"myModalLabel\">";
strVar3 += "Question: ";
strVar3 += questionsArray[ind].value;
strVar3 += "<\/h4>";
strVar3 += "												<\/div>";
strVar3 += "												<div class=\"modal-body\">";
strVar3 += "													<p>";
strVar3 += "Answer: "+answersArray[ind].value;
strVar3 +="<\/p>";
strVar3 += "												<\/div>";
strVar3 += "												<div class=\"modal-footer\">";
strVar3 += "													<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
strVar3 += "														Close";
strVar3 += "													<\/button>";
strVar3 += "";
strVar3 += "												<\/div>";
strVar3 += "											<\/div>";
strVar3 += "										<\/div>";
strVar3 += "									<\/div>";

console.log("iter is"+iter);
iter++;
if(max>thresh){
	$(".msg_container_base").append(strVar1);
	//$("#modal_here").append(strVar3);
	}
else{
	$(".msg_container_base").append(strVar2);
	}
}
});
$(document).on('click', '.icon_close', function (e) {
    //$(this).parent().parent().parent().parent().remove();
    $( "#chat_window_1" ).remove();
});

