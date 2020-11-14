



let modal0 = document.getElementsByClassName('modal0')[0];
let modal1 = document.getElementsByClassName('modal1')[0];
let modal2 = document.getElementsByClassName('modal2')[0];


function visibleOnClickForm (node)
{
    let n = document.getElementsByClassName("out-form-back");
    n[0].style.display ='block';
}

function visibleOnClickPhone (node)
{
    let n = document.getElementsByClassName("phone-form-back");
    n[0].style.display ='block';
}
function visibleOnClickPolicy (node)
{
    let n = document.getElementsByClassName("policy-back");
    n[0].style.display ='block';
}

function closeForm (node)
{
    let x = document.getElementsByClassName("out-form-back");
    let y = document.getElementsByClassName("phone-form-back");
    let z = document.getElementsByClassName("policy-back");
    x[0].style.display ='none';
    y[0].style.display ='none';
    z[0].style.display ='none';

}


    window.onclick = function (event)
    {

        if (event.target == modal0)
        {
            modal0.style.display = 'none';
        }
        if (event.target == modal1)
        {
            modal1.style.display = 'none';
        }
        if (event.target == modal2)
        {
            modal2.style.display = 'none';
        }
    }

