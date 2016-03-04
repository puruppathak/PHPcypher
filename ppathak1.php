 
<?php

/*


Name: Puru Pathak
NETID: ppp280
Citations: php.net
Programming Assignment-1

*/



if ($argc == 4) {        //Check if 4 command line arguments are entered
	$choice=$argv[1];
	$input = $argv[2];
	$output = $argv[3];

if($choice!=1 && $choice!=2)   // Wrong task number check
{
	echo "No such task number. Enter either 1 or 2.\n";
	exit();
}

if($input==null)    // Check for input file
{

     echo "No input file entered.\n";
     exit();

}

if(!file_exists($input))    // Check if input file entered is present

	{

		echo "No such input file. Enter a valid name.\n";

		exit();

	}

if($output==null)   // Check if output file is entered
{
	echo "No output filename entered\n";

	exit();
}



if($choice==1)    // Code for task 1
{

if(file_exists( $input))
{

$input1 = fopen($input, 'r');
$output1 = fopen($output,'w');

$input_str = fread($input1, filesize($input));





for($i=0; $i<=strlen($input_str);$i++)
{

//if(ctype_lower($input_str))
//{

    $var = ord($input_str[$i]) ;   
     
    if($var>96 && $var<123)    // // Check if lower case letters
    {
    	$var=$var+13;
    	if($var>122)
    	{
    	$temp=$var;
    	$temp=$temp-122;
    	$var=$temp+96;
    }
    $var2=chr($var);
    fwrite($output1,$var2);
    

}

else if($var>64 && $var<91)    // Check if upper case letters
    {
    	$var=$var+13;
    	if($var>90)
    	{
    	$temp=$var;
    	$temp=$temp-90;
    	$var=$temp+64;
    }
    $var2=chr($var);
    fwrite($output1,$var2);
    

    }

else if($var>47 && $var<58)   //Check for numbers
    {
    	$var=$var+5;
    	if($var>57)
    	{
    	$temp=$var;
    	$temp=$temp-57;
    	$var=$temp+47;
    }
    $var2=chr($var);
    fwrite($output1,$var2);
    

    }
    
    
    else {                      // Other characters
    	$var3=$input_str[$i];
    fwrite($output1,$var3);
    	
    }}
} }

else if($choice==2)     // Code for task 2
{

	$ass_array=array(     // Associative array hardcoded
		"A"=>"P",
		"B"=>"Q",
		"C"=>"R",
		"D"=>"S",
	    "1"=>"T",
        "2"=>"X",
		"3"=>"Y",
		"4"=>"Z");

if(file_exists($input))
{


$input1 = fopen($input, 'r');
$output1 = fopen($output,'w');
$input_str = fread($input1, filesize($input));





for($i=0; $i<=strlen($input_str);$i++)
{
$match = 0;
foreach($ass_array as $key=>$value)
			{
			
		if($input_str[$i] == $key)
		{
       $match = 1;
       $output12[$i]=$value;
       fwrite($output1,$output12[$i]);
       
       
		}
		}
		if($match == 0)
			{
				$output12[$i]=$input_str[$i];
		fwrite($output1,$output12[$i]);
		

}
}

			}

}
fclose($input1);
fclose($output1);
}
else

{
	Echo "Insufficient number of command line arguments. Enter 3 command line arguments.\n";
	exit();
}


?>