<?php
//==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>
//
// Ajax Poll Script v3.18 [ GPL ]
// Copyright (c) phpkobo.com ( http://www.phpkobo.com/ )
// Email : admin@phpkobo.com
// ID : APSMX-318
// URL : http://www.phpkobo.com/ajax_poll.php
//
//==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<

//----------------------------------------------------------------
// <style>
//----------------------------------------------------------------
$style=<<<_EOM_
<style>
/* [BEGIN] CSS Reset */

.%tclass% table {
}
.%tclass% label {
	margin:2px 0;
	font-style:normal;
	font-weight:normal;
}
.%tclass% button {
	color:black;
}
/* [END] CSS Reset */

.%tclass%,
.%tclass% button {
	font-family: "Verdana", "Arial", "Helvetica", "serif";
}




.%tclass% .poll-title {

}


.%tclass% .poll-table td.poll-caption-cont {
	padding:10px;
	padding-right:0;
}

.%tclass% .poll-bar {
	display:none;
	width:0;
	height:12px;
	background-color:rgba(216, 45, 25, 0.8);

	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	-khtml-border-radius: 4px;
	border-radius: 4px;
}

.%tclass% .poll-button {
	
}

.%tclass% .poll-button:focus {
	
}

.%tclass% .poll-time-msg {
	
}

.%tclass% .ap-clear-block {
	position:absolute;
	right:15px;
	top:0px;
	height:18px;
	color:black;
	font-size:12px;
	background-color:#eee;
	border:1px solid #aaa;
	border-radius:4px;
	cursor:pointer;
	display: none;
}

/*-- tipbox --*/
.%tclass% .poll-tipbox {
	box-sizing:content-box;
	z-index:10000;
	display:none;
	position:absolute;
	top:0;
	left:0;
	margin:0;
	padding:0
	background-color:yellow;
}
.%tclass% .poll-tipbox .poll-tipbox-selectone,
.%tclass% .poll-tipbox .poll-tipbox-havevoted,
.%tclass% .poll-tipbox .poll-tipbox-thankyou {



	margin:0;
	padding:10px 15px;

	text-align:left;
	font-size:16px;
	font-weight:normal;
	font-style:normal;

	color:#fff;
	background-color:#080;
	border:0 solid #cfcfcf;
	border-width:0px 0;

	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
}
.%tclass% .poll-tipbox .poll-tipbox-selectone {
	background-color:#03A9F4;
}
.%tclass% .poll-tipbox .poll-tipbox-havevoted {
	background-color:#03A9F4;
}
.%tclass% .poll-tipbox .poll-tipbox-thankyou {
	background-color:#03A9F4;
}

/*-- checkbox --*/
.%tclass% .poll-input {
	display:none;
}
.%tclass% .poll-input-cont {
	position:relative;
	display:inline-block;
	*zoom:1;
	*display:inline;
	margin:0;
	padding:0;
	width:35px;
	height:35px;
	border-radius:5px;
	vertical-align:middle;
	text-align:left;
	cursor:pointer;
	background-color:#eee;
}
.%tclass% .poll-input-inner {
	
}
.%tclass% .poll-input-cont-on,
.%tclass% .poll-input-inner-on {
	//background-color:#888;
}
.%tclass% .poll-input-mark {
	width:100%;
	height:100%;
	visibility:hidden;
}
.%tclass% .poll-input-mark-on {
	visibility:visible;
}
.%tclass% .poll-input-img {
	display:none;
}

.%tclass% .btn,
.%tclass% .btn-large {
    text-decoration: none;
    color: #fff;
    background-color: #d82d19;
    letter-spacing: .5px;
    transition: .2s ease-out;
    cursor: pointer;
}

</style>
_EOM_;
$this->addStyle($style);

?>