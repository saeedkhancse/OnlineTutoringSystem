function validate()
{
 
   if( document.myForm.district.value == "" )
   {
     alert( "Please provide your dist!" );
     document.myForm.district.focus() ;
     return false;
   }
   if( document.myForm.area.value == "" )
   {
     alert( "Please provide your Email!" );
     document.myForm.area.focus() ;
     return false;
   }
   
   if( document.myForm.medium.value == "-1" )
   {
     alert( "Please provide your country!" );
	 document.myForm.medium.focus() ;
     return false;
   }
   return( true );
}