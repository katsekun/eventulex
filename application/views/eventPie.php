<div class="col-sm-12 cssPie">
    Todos los derechos reservados - Contacto: <a href="mailto:mimail@example.com">mimail@example.com</a> - Aviso Legal
    <?php
    //	echo date("H:i:s  j-m-y");
   		echo date("j-m-y");
    ?>

    <span id="liveclock"></span>
   	<script language="JavaScript" type="text/javascript">
    function show5()
    {
        if (!document.layers&&!document.all&&!document.getElementById)
        {
        	return
        }

        var Digital=new Date()
        var hours=Digital.getHours()
        var minutes=Digital.getMinutes()
        var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        {
        	dn="AM"
        }
        if (hours>12)
        {
        	hours=hours-12
        }
        if (hours==0)
        {
        	hours=12
        }

        if (minutes<=9)
        {
        	minutes="0"+minutes
        }
        if (seconds<=9)
        {
        	seconds="0"+seconds
        }
        //change font size here to your desire
        myclock="<font size='4' face='Arial' >"+hours+":"+minutes+":"+seconds+" "+dn+"</font>"
        if (document.layers)
        {
	        document.layers.liveclock.document.write(myclock)
	        document.layers.liveclock.document.close()
        }
        else if (document.all)
        {
        	liveclock.innerHTML=myclock
        }
        else if (document.getElementById)
        {
        	document.getElementById("liveclock").innerHTML=myclock
        }
        setTimeout("show5()",1000)
    }
    window.onload=show5
    </script>
</div> 
</body>
</html>