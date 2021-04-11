function membre(val)
{
    var elem1=document.getElementById('1');
    var elem2=document.getElementById('2');
    var elem3=document.getElementById('3');
    var elem4=document.getElementById('4');
    var elem5=document.getElementById('5');
    var elem6=document.getElementById('6');
    var elem7=document.getElementById('7');
    if(val=='nom'){
        elem7.style.display='block';
        elem3.style.display='none';
        elem2.style.display='none';
        elem4.style.display='none';
        elem5.style.display='none';
        elem6.style.display='none';
    }else if(val=='email'){
    elem2.style.display='block';
    elem3.style.display='none';
    elem4.style.display='none';
    elem5.style.display='none';
    elem6.style.display='none';
    elem7.style.display='none';}
    else if(val=='FP'){elem3.style.display='block';
    elem6.style.display='none';
    elem5.style.display='none';
    elem4.style.display='none';
    elem2.style.display='none';
    elem7.style.display='none';}
    else if(val=='date'){elem4.style.display='block';
    elem6.style.display='none';
    elem5.style.display='none';
    elem3.style.display='none';
    elem2.style.display='none';
    elem7.style.display='none';
}
    else if(val=='img'){elem5.style.display='block';
    elem6.style.display='none';
    elem4.style.display='none';
    elem3.style.display='none';
    elem2.style.display='none';
    elem7.style.display='none';
}
    else {elem6.style.display='block';
    elem5.style.display='none';
    elem4.style.display='none';
    elem3.style.display='none';
    elem2.style.display='none';
    elem7.style.display='none';}
}
function ACTUALITE(val)
{
    var elem1=document.getElementById('1');
    var elem2=document.getElementById('2');
    var elem3=document.getElementById('3');
    var elem4=document.getElementById('4');
    var elem5=document.getElementById('5');
    if(val=='titre'){
        elem5.style.display='block';
        elem2.style.display='none';
        elem3.style.display='none';
        elem4.style.display='none';
    }else if(val=='auteur'){elem2.style.display='block';
        elem4.style.display='none';
        elem3.style.display='none';
        elem5.style.display='none';
        }
    else if(val=='text'){elem3.style.display='block';
        elem2.style.display='none';
        elem4.style.display='none';
        elem5.style.display='none';}
    else {elem4.style.display='block'
        elem2.style.display='none';
        elem3.style.display='none';
        elem5.style.display='none';}
}
function publication(val)
{
    var elem2=document.getElementById('2');
    var elem3=document.getElementById('3');
    var elem4=document.getElementById('4');
    var elem5=document.getElementById('5');
    var elem6=document.getElementById('6');
    var elem7=document.getElementById('7');
    var elem8=document.getElementById('8');
    if(val=='titre'){
        elem2.style.display='none'
        elem3.style.display='none'
        elem4.style.display='none'
        elem5.style.display='none'
        elem6.style.display='none'
        elem7.style.display='none'
        elem8.style.display='block'
    }else if(val=='auteur'){elem2.style.display='block';
        elem3.style.display='none'
        elem4.style.display='none'
        elem5.style.display='none'
        elem6.style.display='none'
        elem7.style.display='none'
        elem8.style.display='none'}
    else if(val=='journal'){elem3.style.display='block';
        elem6.style.display='none'
        elem2.style.display='none'
        elem5.style.display='none'
        elem4.style.display='none'
        elem7.style.display='none'
        elem8.style.display='none'}
    else if(val=='volume') {elem4.style.display='block';
        elem2.style.display='none'
        elem3.style.display='none'
        elem7.style.display='none'
        elem5.style.display='none'
        elem6.style.display='none'
        elem8.style.display='none'}
        else if(val=='page') {elem5.style.display='block';
        elem2.style.display='none'
        elem3.style.display='none'
        elem4.style.display='none'
        elem6.style.display='none'
        elem7.style.display='none'
        elem8.style.display='none'}
        else if(val=='annee') {elem6.style.display='block';
        elem2.style.display='none'
        elem3.style.display='none'
        elem4.style.display='none'
        elem5.style.display='none'
        elem7.style.display='none'
        elem8.style.display='none'}
        else  {elem7.style.display='block';
        elem2.style.display='none'
        elem3.style.display='none'
        elem4.style.display='none'
        elem5.style.display='none'
        elem6.style.display='none'
        elem8.style.display='none'}
}
function projet(val)
{
    var elem2=document.getElementById('2');
    var elem3=document.getElementById('3');
    var elem4=document.getElementById('4');
    var elem5=document.getElementById('5');
    var elem6=document.getElementById('6');
    if(val=='name'){
        elem6.style.display='block'
        elem2.style.display='none'
        elem3.style.display='none'
        elem4.style.display='none'
        elem5.style.display='none'
    }else if(val=='auteur'){elem2.style.display='block';
        elem3.style.display='none'
        elem4.style.display='none'
        elem5.style.display='none'
        elem6.style.display='none'}
    else if(val=='referance'){elem3.style.display='block';
        elem2.style.display='none'
        elem4.style.display='none'
        elem5.style.display='none'
        elem6.style.display='none'}
    else if(val=='date'){elem4.style.display='block';
        elem2.style.display='none'
        elem3.style.display='none'
        elem5.style.display='none'
        elem6.style.display='none'}
    else {elem5.style.display='block';
        elem2.style.display='none'
        elem3.style.display='none'
        elem4.style.display='none'
        elem6.style.display='none'}
}
function galerie(val)
{
    var elem2=document.getElementById('2');
    var elem3=document.getElementById('3');
    if(val=='nom'){
        elem2.style.display='block';
        elem3.style.display='none';
    } else {elem3.style.display='block'
        elem2.style.display='none';}
}
function lien(val)
{
    var elem2=document.getElementById('2');
    var elem3=document.getElementById('3');
    if(val=='name'){
        elem2.style.display='block';
        elem3.style.display='none';
    } else {elem3.style.display='block'
        elem2.style.display='none';}
}