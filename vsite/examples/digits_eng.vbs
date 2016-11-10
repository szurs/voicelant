Function Digits(byval path,byval arg1)
  'returns a list of comma delimited wav files,
  'with each wav file corresponding to a character
  'in the supplied input string.
  
  sDigits=Trim(arg1)
  For i=1 To Len(sDigits)
  	sDigit = Mid(sDigits, i, 1)
    If sDigit = "-" Then
      sWav = path & "minus.wav"
    Else
      sWav = path & sDigit & ".wav"
    end If
    If sOut = "" Then
    	sOut = sWav
    else
    	sOut = sOut & "," & sWav
    End if
  Next
  Digits = sOut

End Function

mesarray=Digits(pathdig,newdigits)
  