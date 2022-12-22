<?php

/*

    PHP API to execute crypto programs and return the result
    
    Input:
        - id_encryption (integer):
            - 1 = 1337
            - 2 = Caesar
            - 3 = Base64
            - 4 = Md5
            - 5 = Salsa 20
            - 6 = SHA1
            - 7 = Rot13
            - 8 = Rot1
        - text (string)
        
    Return error 404 when:
        - id_encryption is not between 1 and 8 included
        - crypto program is not available 
    
    Return error 500 when:
        - id_encryption is not an integer
        - text is not a string
        - text contains not ASCII characters

    
    Your page can be accessible only from localhost, encryptallthethings.org and www.encryptallthethings.org
    POST and OPTION are allow as HTTP methods.
    Never trust an input!
    
    All crypto programs should be in the same folder as this file to execute it.
    The result of a program execution should be return in plain text (ContentType: "text/plain")
    Be careful when you execute a program with an input...

*/

?>