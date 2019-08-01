<?php include 'includes/header.php'; ?>
    <h1>DATE & TIME:</h1>

<ul>DATE:
    <li>DAY: echo date('d');</li>
    <li>MONTH: echo date('m');</li>
    <li>YEAR 2-DIGITS: echo date('y');</li>
    <li>YEAR 4-DIGITS: echo date('Y');</li>
    <li>DAY OF WEEK: echo date('l')</li>
    <ul>PRINT FORMATTING:
        <li>echo date('m/d/y');
        <br/>echo date('m-d-Y');</li>
    </ul>
</ul>

<ul>TIME:
    <li>HOUR: echo date('h');</li>
    <li>MINUTES: echo date('i');</li>
    <li>SECONDS: echo date('s');</li>
    <li>AM: echo date('a');</li>
    <li>PM: echo date('p');</li>
    <li>set TIMEZONE: date_default_timezone_set('America/Chicago'); //CST</li>
</ul>

<ul>TIMESTAMP:
    <p>The Unix timestamp is a long integer 
containing the number of seconds between 
the Unix Epoch (January 1 1970 00:00:00 GMT) 
and the time specified.</p>
    <li>TIMESTAMP: $timestamp = mktime(07,52,55,10,05,1975); <br/>echo date('m/d/Y h:i:sp', $timestamp)<br/>//18174557510/05/1975 07:52:55p  = October 5, 1975 @ 7:52:55pm </li>
    <ul>STRING TO TIME: strtotime()
        <li>RIGHT NOW: $timestamp3 = strtotime('now');
<br/>echo date('m/d/Y h:i:s', $timestamp3);</li> 
<br/>$timestamp2 = strtotime('7:00pm March 22 2016');
echo $timestamp2;
echo date('m/d/Y h:i:sp', $timestamp2);</li>
    <li>TOMORROW:  $timestamp3 = strtotime('tomorrow');
<br/>echo date('m/d/Y h:i:s', $timestamp3);</li>
    <li>NEXT FRIDAY:  $timestamp4 = strtotime('next Friday');
<br/>echo date('m/d/Y h:i:s', $timestamp4);</li>
    <li>TWO DAYS FROM NOW:  $timestamp5 = strtotime('+2 Days');
<br/>echo date('m/d/Y', $timestamp5);</li>
</ul>

<ul>FOR MORE DATES AND TIMESTAMPS:
    <li>GENERAL PHP HELP:  <a href='php.net'>PHP.NET</a></li>
    <li><a href='https://php.net/manual/en/function.date.php'>DATES</a></li>
</ul>


<?php include 'includes/footer.php'; ?>


