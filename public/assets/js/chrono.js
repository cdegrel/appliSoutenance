
var sec = 0;
var min = 0;
var hrs = 0;
var timer;
var pause = false;
var text = "";
var duree = "";
var duree2 = "";
var dureesplit;
var secTrop=0;
var minTrop =0;
var hrsvide = 0;
var minvide = 0;
var secvide = 0;


function Indiquermin()
{
    if(duree == ""){
        duree = document.getElementById('chronotime').innerHTML;
        duree2=duree;
    }
    dureesplit = duree2.split(':');
    sec = parseInt(dureesplit[2]);
    min = parseInt(dureesplit[1]);
    hrs = parseInt(dureesplit[0]);
}

function Chrono()
{

    if ((sec > 0) || (min >0) || (hrs>0))
    {

        sec = sec -1;

        if(sec<0){
            if (hrs>0) {
                if(min==00){
                    hrs = hrs-1;
                    min = 59;
                    sec = 59;
                }else{
                    min = min-1;
                    sec = 59;
                }
            }else if (min >0){
                min = min -1;
                sec = 59;
            }else if (min==0){
                sec = 59;
            }

        }

        if (hrs < 10){
            hrsvide = "0";
        }else{
            hrsvide = "";
        }

        if (min < 10){
            minvide = "0";
        }else{
            minvide = "";
        }
        if (sec < 10){
            secvide = "0";
        }else{
            secvide = "";
        }

        text = hrsvide +hrs + ':' + minvide + min + ':' + secvide + sec;
        duree2=text;
    }
    else
    {

        secTrop = secTrop +1;
        if (secTrop >59) {
            minTrop = minTrop +1;
            secTrop = 0;                    }
        text = "+ " + minTrop + "m" + secTrop + "s";
    }
    document.getElementById('chronotime').innerHTML = text;
}


function DemarrerChrono()
{
    Indiquermin();
    timer = setInterval('Chrono()', 1000);
    document.getElementById('btn_dem').style.display = 'none';
    document.getElementById('btn_pause').style.display = 'inline';

}
function ArreterChrono()
{
    clearInterval(timer);
    pause=false;
    duree2=duree;
    document.getElementById('chronotime').innerHTML = duree2;
    document.getElementById('btn_dem').style.display = 'inline';
    document.getElementById('btn_pause').style.display = 'none';
}

function PauseChrono()
{
    if (!pause)
    {
        pause = true;
        clearInterval(timer);
        text = '' + text;
        document.getElementById('chronotime').innerHTML = text;
        document.getElementById('btn_pause').value = 'START';
    }
    else
    {
        pause = false;
        DemarrerChrono();
        document.getElementById('btn_pause').value = 'PAUSE';
    }
}
