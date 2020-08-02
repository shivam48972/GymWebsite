function addNumbers()
{
        var val1 = parseInt(document.getElementsByName("weight").value);
        var val2 = parseInt(document.getElementsByName("hight").value);
        var ansD = document.getElementsByName("calculate");
        ansD.value = val1 + val2;
}