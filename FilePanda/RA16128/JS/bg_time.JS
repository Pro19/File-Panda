var now = new Date();
var hours = now.getHours();

document.write('It\'s now: ', hours, '<br><br>');
document.bgColor="#CC9900";

//18-19 night
if (hours > 17 && hours < 20)
{
    document.write ('<body style="background-color: orange">');
}
//20-21 night
else if (hours > 19 && hours < 22)
{
    document.write ('<body style="background-color: orangered">');
}
//22-4 night
else if (hours > 21 || hours < 5)
{
    document.write ('<body style="background-color: #c0c0c0;">');
}
//9-17 day
else if (hours > 8 && hours < 18)
{
    document.write ('<body style="background-color: #616d7e">');
}
//7-8 day
else if (hours > 6 && hours < 9)
{
    document.write ('<body style="background-color: skyblue">');
}
//5-6 day
else if (hours > 4 && hours < 7)
{
    document.write ('<body style="background-color: steelblue">');
}
else 
{
    document.write ('<body style="background-color: white">');
}