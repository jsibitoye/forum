// JavaScript Document
var list=['orange', 'table', 'file', 'laptop','lautech'];
var a= list.length;
var last=[]
var real="",me,no=0,stp,cnt,men=0;
 var arng="";
 var s=0,k=0;
var role=0;
var btf=0;

function unlk()
{
	var crnt=document.getElementById("stage").value;
	
	if(crnt==2)
	{ 
		document.getElementById("score").style.display="none";
		document.getElementById("lif").style.display="inline";
		document.getElementById("gam").style.display="none";
		next();	
	}
	
	if(crnt==1)
	{ 	document.getElementById("score").style.display="none";
		document.getElementById("lif").style.display="none";
		document.getElementById("gam").style.display="inline";
	}
}
function shuf()
		  {
			 me=document.getElementById("stat").value;
			arng=document.getElementById("ar").value;
			document.getElementById("ar").style.display='inline'
			 if(list=="")
			{
				//document.getElementById("ar").style.display='none'
				//document.getElementById("stat").style.display='none';
				chk();
			}
			
			if(real !=="")
			{
				if(real==arng)
				{s+=5;
				conc();
				}
			}
			
			if(arng !=="")
			{
				arng=document.getElementById("ar").value="";
			}

			var ln=arng.length;
			 document.getElementById("stat").value="NEXT";
			 document.getElementById("sub").style.display='inline';
			  var b= Math.ceil(Math.random()*a-1);
			  var slct=list[b];
			  real=slct;
			  a=a-1;
			  list[b]=list[a];
			  list.pop();
			  var br=slct.split("");
			  var a2=br.length;
			  var nword="";
			  for(i=0; i < a2; i++)
				  {
					  var rnd = parseInt(Math.random()*a2);
					  if(br[rnd] != "")
					  { nword+=br[rnd];
					    br[rnd] = "" ;}
					  else
					  {i-- ;}	  	
			  	 }
				 document.getElementById("lt").value=nword;
				 //alert(list);
				 if (stp!=="")
				 {clearTimeout(stp);}
				 cnt=30;
				 document.getElementById("tim").style.color='blue';
				 document.getElementById("tim").style.textDecoration="none";
				 timer();
}

function submi()
{
	 if(list !=="")
	  {
		  var ask= confirm("are you sure?")
		  if(ask==true)
			{chk();}
	  }
	  else
	  {  chk();}
}
		
var ct=0,mk=10;
function chk()
{	
	document.getElementById("gam").style.display='none';
	document.getElementById("lif").style.display='none';
	document.getElementById("score").style.display='inline';
	clearTimeout(stp);
	document.getElementById("tim").value="00:00";
	mk+=10;
	if(s>0)
	{ct++;
	if(ct<10)
	{ct="0"+ct;}
	document.getElementById("scoo").value=ct+"%";
	var stpp=setTimeout("chk()",mk);
	if (ct==s)
	{
		if(s>=20)
	{
		document.getElementById("stg2").disabled=false;
		alert("STAGE 2 IS NOW UNLUCKED");
	}
	else
	{ alert("better luck next time to");}
		
		clearTimeout(stpp);
	}
	}
	else{document.getElementById("scoo").value=0+"%";
	}
	/*if(ct==1)
	{ if(list !=="")
	{
	  var ch=confirm("are you sure ?");
		if(ch==true)
		{
			document.getElementById("stat").style.display='none';
			btf+=1;
			if(s>0)
			{
			conc();
			}
			else
			{
				document.getElementById("sco").value=0+'%';
			}
		}
		}
	}*/
}

var mslw=100;
	function conc()//score
	{
			mslw+=70;
			role++;
			document.getElementById("sco").value=role+'%';
		var bola=setTimeout("conc()",mslw);
		  if(role==s)
		  { 
			  clearTimeout(bola);
			  role=s;
			  mslw=100;
		  }
	}
function timer()
{
		
		cnt--;
		stp=setTimeout("timer()",500);
		if(cnt<10)
		{cnt="0"+cnt}
		document.getElementById("tim").value="00:"+cnt;
		if(cnt<6)
		{
			var st= document.getElementById("tim").style;
			st.color='#F60';
			st.textDecoration="blink";
		}
		if(cnt==0)
			{
				if(btf=="0")
				{
					alert('time up click next');
					document.getElementById("ar").style.display='none'
					document.getElementById('a').disabled=true;
					document.getElementById('b').disabled=true;
					document.getElementById('c').disabled=true;
					document.getElementById('d').disabled=true;
				}
				clearTimeout(stp);
				st.textDecoration="none";	
			}
}
var op="",but1;
function gon(v)
{ 
	but1=document.getElementById(v).checked;
		op=v;
}

	var q1="what is the website of NSCDC?",no;
	var q2="who is the leader of the boko haram sect?";
	var q3="what is the greatest broblem of the country as at now?"
	var q4="what is the name of your java script teacher?";
	var q5="which of these depertments is the best?";
	var ary= [q1,q2,q3,q4,q5],r=ary.length,answer;
function next()
{
	document.getElementById('a').disabled=false;
	document.getElementById('b').disabled=false;
	document.getElementById('c').disabled=false;
	document.getElementById('d').disabled=false;
		if (op !=="")
	  {
		if (op==answer)
		  {
			 s+=5;
			 conc();
		  }
		 document.getElementById(op).checked=false;
	  }
	  
	  if(ary=="")
	  { chk(); }
	no+=1;
	var n= Math.ceil(Math.random()*r-1);
	var tk=ary[n];
	r=r-1;
	ary[n]=ary[r]
	ary.pop();
	document.getElementById("qst").value=no;
	document.getElementById("soq").value=tk;
	switch(tk)
	{
		case q1:
		document.getElementById("a1").value="www.lautech.edu.ng";
		document.getElementById("b1").value="I don't know"
		document.getElementById("c1").value="ask google";
		document.getElementById("d1").value="w w w . NSCDC, thats all";
		answer="d"; 
		break
		case q2:
		document.getElementById("a1").value="Sekahu Noname";
		document.getElementById("b1").value="Sekahu We re";
		document.getElementById("c1").value="Sekahu Sanbisa";
		document.getElementById("d1").value="Sekahu Olajide Rafiu SQI";
		answer="b";
		break
		case q3:
		document.getElementById("a1").value="Food";
		document.getElementById("b1").value="Sekahu";
		document.getElementById("c1").value="Boko - Haram";
		document.getElementById("d1").value="Lautech";
		answer="c";
		break
		case q4:
		document.getElementById("a1").value="Mr Sunde Ajayi";
		document.getElementById("b1").value="Mr Sunday Olowookere";
		document.getElementById("c1").value="Mr Sunday, Am not sure";
		document.getElementById("d1").value="Mr Sunday SQI";
		answer="c";
		break
		case q5:
		document.getElementById("a1").value="CSE";
		document.getElementById("b1").value="EEE";
		document.getElementById("c1").value="FSC";
		document.getElementById("d1").value="Lautech";
		answer="a";
		break
	}
	
	  if (stp!=="")
	  {clearTimeout(stp);}
	  cnt=30;
	  document.getElementById("tim").style.color='blue';
	  document.getElementById("tim").style.textDecoration="none";
	  timer();
}
