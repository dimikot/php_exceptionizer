PHP_Exceptionizer: Library to converting E_NOTICE and others to Exception in development mode
(C) dkLab, http://en.dklab.ru/lib/PHP_Exceptionizer/

Simple, but a very useful library PHP_Exceptionizer automatically converts 
notices (E_NOTICE), warnings (E_WARNING) etc. into PHP exceptions. 


SYNOPSIS
--------

// Somewhere in the script initialization code.
error_reporting(E_ALL);
if (<is debug mode active>) {
    $exceptionizer = new PHP_Exceptionizer(E_ALL);
    // And let this variable along, taking care it is not deleted 
    // until the script end. Deletion of this variable causes 
    // PHP_Exceptionizer turning off.
}
...
// Below you could catch notices as exceptions:
try {
    echo $undefinedVariable;
} catch (E_NOTICE $e) {
    echo "Notice raised: " . $e->getMessage();
}
...
// If you catch E_NOTICE, you also catch E_WARNING:
try {
    fopen("non-existed", "r");
} catch (E_NOTICE $e) {
    echo "Warning or worse raised: " . $e->getMessage();
}
...
// You could not to catch anything, so a notice will cause script termination.
echo $undefinedVariable;



DESCRIPTION
-----------

Value for script debugging

It is handy to use this library during web script development process. You 
should develop in error_reporting = E_ALL mode and keep in mind that even a 
small notice during the developement often causes a fatal error.

A typical example when notices may be lost - a script which generates a 
redirect to some other URL. This notice will be lost, when the buferization 
is turned on (ob_start()).

Of course, on production server you must not turn notices into exceptions 
(to be on a safe side), but just read them in log files.


Value for mass mailing generation

Imagine that you have created a script which sends mails to millions of site 
subscribers, and the mail text is generated dynamically, depending on user's 
profile or their friends. Once you upon could think that it is very 
dangerous to run this script... What if a small mistake would cause millions 
of persons to receive mails with empty fields or even broken?

PHP_Exceptionizer allows to minimize this risk greatly if you turn on the 
library before generating and sending of each mail. 
