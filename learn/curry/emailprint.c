/* EMAILPRINT PROGRAM

    Created: Sunday, November 29, 2020
    Author: Michael Morelli 
    Email: mike@ogmath.com
    Git Profile: https://github.com/ogmath/
    Link to Git source for this file: https://github.com/ogmath/ogmath.github.io/blob/master/learn/curry/emailprint.c
    Language: C
    Standard: C17

    PURPOSE
        Sends an email based on user input and prints the program source.

    HOW THIS PROGRAM WORKS
        1. Gets user input email address from console
        2. Loads echo message and mutt commands into sprintf buffer
        3. Passes buffer to system function to execute at runtime 
        4. Calls system function to print source code

    DESCRIPTION
        This is a small program I wrote to ask me for an
        email address which will be used later, then load a 
        message with variables into a buffer using sprintf. 

        Sprintf holds the content in memory and passes my 
        whole little program to system() as a single char 
        because the system function only accepts one argument. 

        The sprintf() contents are just a series of linked 
        shell commands working together to send an email to 
        whatever email I specify in the scanf function, 
        including an attachment of the program's source code, 
        then print the program source to my local printer
        indicating the program executed successfully. 
*/

#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>
#include <string.h>

int main(){
    char buffer[1000];
    char email[30];
    
    /* int emailLength; I am still working on this.
       int stlen(const int *emailLength); Right now it returns 0. */

    /* Get recipient's email from console*/
    printf("Enter recipeient email: ");
    scanf("%s", email);
    
    /* Load the sprintf buffer with my shell commands. */
    sprintf(buffer, "echo 'Hi,\n\n\
            This email was created and sent\n\
            from within a C program I wrote.\n\
            The source code is attached.\n\
            \n\
            Take a look at the source code.\n\
            See if you can follow what happens in the code.\n\
            \n\
            --Morelli\n\
            \n\
            Your email address is %s.\n\
            This program was written in the VSCode Editor'\
            | mutt %s -s 'C PROGRAM SOURCE' -a emailprint.c\
            ", email, email);
    
    /* Pass the sprintf buffer to the system function so the commands can execute. */
    system(buffer);
    
    /* Use the system function to run the enscript shell command and print to the luna printer. */
    system("enscript -d luna -t 'EMAILPRINT SOURCE CODE' --line-numbers emailprint.c");
    
    return 0;
}

