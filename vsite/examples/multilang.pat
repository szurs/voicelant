{<M"SelectLanguage.wav"><R(1,8)>?{{SWITCH(V(DTMF))<CASE("0")>{<M"HELP.WAV">}<CASE("1")>{<INCLUDE("English.pat")>}<CASE("2")>{<INCLUDE("Spanish.pat")>}<CASE("3")>{<INCLUDE("French.pat")>}<CASE("%")>{<M"NotLanguage.wav">}}}:{<M"NotChoice.wav">}}