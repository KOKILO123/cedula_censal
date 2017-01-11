/*
 * PREGUNTA	:	P303
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P303 = 1),  Pase a P304_1
 Si (P303 = 2),  Pase a P308
 PREGUNTA	:	P304_4
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P304_3 = “” AND (P304_1 = 1 OR P304_2 = 1 OR P304_4 = 1)),  Pase a P309
 Si (P304_3 = 1 AND (P304_1 = “” AND P304_2 = “” AND P304_4 = “”)),  Pase a P305
 Si (P304_3 = 1 AND (P304_1 = 1 OR P304_2 = 1 OR P304_4 = 1)),  Pase a P305
 PREGUNTA	:	P307
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P307 <> “”),  Pase a P309
 */
