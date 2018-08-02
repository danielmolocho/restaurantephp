import processing.serial.*;
 Serial port;
 void setup()  {
   /* Esta parte debes de alterarla , en donde estan los corchetes deberas de escribir el puerto con el que se esta comunicando el Arduino en mi caso es el 0 , basa con ir tecleando 0,1,2,3... hasta que funcione y listo. */
    port = new Serial(this, Serial.list()[0], 9600);  
    
}
 void draw() {
  String onoroff[] = loadStrings("http://localhost/wizdomshouse/LEDstate.txt"); // AQUI se inserta la direcion de tu archivo .txt en mi caso es asi http://localhost/LEDstate.txt  http://ocmamx.tk/cliente/LEDstate.txt
  print(onoroff[0]);  // Imprime lo que esta en el archivo (1 o 0)

if (onoroff[0].equals("0") == true) {
    println("nada");
     // Envia High
  } 
  else if (onoroff[0].equals("7") == true) {
    println("UNO");
    port.write('A'); // Envia High
  }   

  else if (onoroff[0].equals("8") == true) {
    println("DOS");
    port.write('B'); // Envia High
      } 
   else if (onoroff[0].equals("9") == true) {
    println("TRES");
    port.write('C'); // Envia High
      } 
      else if (onoroff[0].equals("10") == true) {
    println("CUATRO");
    port.write('D'); // Envia High
      } 
      else if (onoroff[0].equals("11") == true) {
    println("CINCO");
    port.write('E'); // Envia High
      } 
      else if (onoroff[0].equals("12") == true) {
    println("SEIS");
    port.write('F'); // Envia High
      } 
      else if (onoroff[0].equals("13") == true) {
    println("SIETE");
    port.write('G'); // Envia High
      } 
      else if (onoroff[0].equals("14") == true) {
    println("OCHO");
    port.write('H'); // Envia High
      } 
      else if (onoroff[0].equals("15") == true) {
    println("NUEVE");
    port.write('I'); // Envia High
      } 
      else if (onoroff[0].equals("16") == true) {
    println("DIEZ");
    port.write('J'); // Envia High
      } 
      else if (onoroff[0].equals("17") == true) {
    println("ONCE");
    port.write('K'); // Envia High
      } 
      else if (onoroff[0].equals("18") == true) {
    println("DOCE");
    port.write('L'); // Envia High
      } 
       else if (onoroff[0].equals("19") == true) {
    println("TRECE");
    port.write('M'); // Envia High
      } 
       else if (onoroff[0].equals("20") == true) {
    println("CATORCE");
    port.write('N'); // Envia High
      } 
       else if (onoroff[0].equals("21") == true) {
    println("QUINCE");
    port.write('O'); // Envia High
      } 
delay(2000);
 }
