<?
require_once("dbconfig.php");

?>
<style>
*{margin:0;padding:0;font-family:arial;}
	
	#profilresmisec > input{
		width:100%;
		position:absolute;
		top:1px;
		left:1px;
		height:100%;
		opacity:0;
	}
	.skinsecbtn{
	}
</style>
<body>
			<div id="profil">
					<script src="js/jquery-1.11.1.min.js"></script>
					<script src="js/jquery.form.js"></script>
					<script>
						var _0xe9ec=["\x73\x75\x62\x6D\x69\x74","\x23\x70\x72\x6F\x66\x69\x6C","\x61\x6A\x61\x78\x46\x6F\x72\x6D","\x23\x73\x65\x6C\x65\x63\x74\x65\x64\x53\x6B\x69\x6E","\x63\x68\x61\x6E\x67\x65","\x23\x72\x65\x73\x69\x6D"];$(function(){$(_0xe9ec[5])[_0xe9ec[4]](function(){$(_0xe9ec[3])[_0xe9ec[2]]({target:_0xe9ec[1]})[_0xe9ec[0]]()})})
					</script>
					<center>
					<form id="selectedSkin" enctype="multipart/form-data" method="post" action="profilresim.php">
						<div id="profilresmisec">
							<input type="file" name="resim" id="resim" class="inputext"/>
							<div class="skinsecbtn">
							</div>
						</div>
						
					</form>
					</center>
				</center>
</body>