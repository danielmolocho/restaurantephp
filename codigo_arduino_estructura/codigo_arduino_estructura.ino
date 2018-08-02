#define VELOCIDAD 1000//VELOCIDAD DE NEMA 17
//----------------------------VARIABLES DEL NEMA----------------------------
int steps = 8;
int direccion = 9;
int reset = 0;
//---------------------------PASOS DEL NEMA 17------------------------------
//para vodka
long vodka=2800;
long cafe=5600;
long tequila=8300;
long ron= 10900;
long whiskey=13500;
long curacao=16400;
long bombas =19300;
//---------------------------------BOMBAS-----------------------------------
int input;
int motor1 = 2; 
int motor2 = 3; 
int motor3 = 4;
int motor4 = 5;
int motor5 = 6;
int motor6 = 7;
//----------------------------------MOTORSUBIDA-----------------------------
int IN3 = 10; 
int IN4 = 11;
//----------------------------------piston-----------------------------
int IN1 = 12; 
int IN2 = 13;
//-------------------------------TIEMPO DE BOMBAS
 int chesk = 10000; // licor de 1 onza
 int limon=4000;
 int UP = 10500; // jugo o refresco
 int DOWN = 9700; // RON
 int offTime = 1000; 
void setup(){    
pinMode(steps, OUTPUT); 
pinMode(direccion, OUTPUT); 
pinMode(reset, OUTPUT);
//-------------------------BOMBAS---------------
pinMode(motor1, OUTPUT); //SPRITE 
pinMode(motor2, OUTPUT);   //SQUIRT
pinMode(motor3, OUTPUT);    //JUGO NARANJA
pinMode(motor4, OUTPUT);      //COCA
pinMode(motor5, OUTPUT);        //ARANDANO
pinMode(motor6, OUTPUT);          //JUGO LIMON
//-------------------------MOTOR----------------
pinMode (IN4, OUTPUT);    // Input4 conectada al pin 4 BAJA
pinMode (IN3, OUTPUT);    // Input3 conectada al pin 5 SUBE
pinMode (IN1, OUTPUT);    // Input4 conectada al pin 4 BAJA
pinMode (IN2, OUTPUT);
Serial.begin(9600);

}

void loop(){
 
      
if (Serial.available()>0){
input=Serial.read();

//--------------------------------------------------BLUE LAGOON COKTEL--------------------------------------------------------------------------------------------------------
if (input=='A'){
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);

     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//MOTOR A PASOS DEL RIEL
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<vodka; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);


//ida a curacao
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<13600; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}


   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);

//ida a bombas
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<2900; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

digitalWrite(motor1, HIGH);
    delay (chesk); 
    digitalWrite(motor1, LOW); 
    delay (offTime);

    //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
}
}

////////////////////////////////////////////////////////////////////////////
if (input=='B'){


     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
//ida a tequila
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
//ida a bombas
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<11000; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

 digitalWrite(motor2, HIGH);
    delay (chesk); 
    digitalWrite(motor2, LOW); 
    delay (offTime);

    //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}

/////////////////////////////////////////////////////////////
 if (input=='C'){

     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<whiskey; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);

   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<whiskey; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
 }

/////////////////////////////////////////////////////////////
 if (input=='D'){

     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<ron; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
//ida a bomba
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<8400; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}


 digitalWrite(motor4, HIGH);
    delay (chesk); 
    digitalWrite(motor4, LOW); 
    delay (offTime);
    
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
 }


/////////////////////////////////////////////////////////////
 if (input=='E'){
       digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<vodka; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
  
//ida a bomba
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<2800; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
    
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<cafe; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
 }

//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='F'){
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);

   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
    
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 

}


//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='G'){
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<vodka; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);

//ida a bomba
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<16500; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

digitalWrite(motor3, HIGH);
    delay (chesk); 
    digitalWrite(motor3, LOW); 
    delay (offTime);
    
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}

//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='H'){

     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a tequila
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
//ida a bombas
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<11000; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

 digitalWrite(motor6, HIGH);
    delay (limon); 
    digitalWrite(motor6, LOW); 
    delay (offTime);
    
 digitalWrite(motor4, HIGH);
    delay (chesk); 
    digitalWrite(motor4, LOW); 
    delay (offTime);
    //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}


//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='I'){
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a tequila
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
//ida a bombas
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<11000; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

 digitalWrite(motor6, HIGH);
    delay (limon); 
    digitalWrite(motor6, LOW); 
    delay (offTime);
    
 digitalWrite(motor1, HIGH);
    delay (chesk); 
    digitalWrite(motor1, LOW); 
    delay (offTime);
    //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}

 if (input=='J'){

   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<vodka; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
  
//ida a bomba
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<2800; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);

    //ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<13700; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

digitalWrite(motor6, HIGH);
    delay (limon); 
    digitalWrite(motor6, LOW); 
    delay (offTime);
    
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
 }

//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='K'){

     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);

   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a tequila
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
//ida a bombas
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<11000; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

 digitalWrite(motor6, HIGH);
    delay (limon); 
    digitalWrite(motor6, LOW); 
    delay (offTime);
    
 digitalWrite(motor2, HIGH);
    delay (chesk); 
    digitalWrite(motor2, LOW); 
    delay (offTime);
    //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}

//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='L'){
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<cafe; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);

  //ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<2700; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}

//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='M'){
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a tequila
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
   digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
//ida a bombas
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<11000; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

 digitalWrite(motor3, HIGH);
    delay (5000); 
    digitalWrite(motor3, LOW); 
    delay (offTime);
    
 digitalWrite(motor5, HIGH);
    delay (chesk); 
    digitalWrite(motor5, LOW); 
    delay (offTime);
    //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}

//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='N'){
     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<cafe; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);

  //ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<2700; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}


//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='O'){

     digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);
  
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<vodka; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);

//ida a tequila
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<5500; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);


//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<2600; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);



  //ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<5500; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);


//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<2900; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}

digitalWrite(motor6, HIGH);
    delay (3000); 
    digitalWrite(motor6, LOW); 
    delay (offTime);

    digitalWrite(motor2, HIGH);
    delay (3000); 
    digitalWrite(motor2, LOW); 
    delay (offTime);

    
  
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<bombas; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);    
     delayMicroseconds(VELOCIDAD);
} 
}






//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='X'){
//ida a vodka
 digitalWrite(reset, LOW);
 delay(2000); 
 digitalWrite(reset, HIGH);
 digitalWrite(direccion, LOW);
 
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, LOW);
     digitalWrite(steps, HIGH);
     delayMicroseconds(VELOCIDAD);
}
     digitalWrite (IN4, LOW);
  digitalWrite (IN3, HIGH); 
  delay(UP);
  // Motor no gira
  digitalWrite (IN4, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN3, LOW);
  delay(DOWN);
  // Motor no gira
  digitalWrite (IN3, HIGH); 
  delay(1000);
      //°°°°°VUELTA°°°°°
digitalWrite(reset, LOW);
delay(2000); 
digitalWrite(reset, HIGH);
digitalWrite(direccion, HIGH);
         
for (int i = 0; i<tequila; i++)
{
     digitalWrite(steps, HIGH);
     digitalWrite(steps, LOW);
     delayMicroseconds(VELOCIDAD);
} 
}
//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='Y'){
    digitalWrite(motor1, HIGH);
    delay (chesk); 
    digitalWrite(motor1, LOW); 
    delay (offTime);

    digitalWrite(motor2, HIGH);
    delay (chesk); 
    digitalWrite(motor2, LOW); 
    delay (offTime);

    digitalWrite(motor3, HIGH);
    delay (chesk); 
    digitalWrite(motor3, LOW); 
    delay (offTime);

    digitalWrite(motor4, HIGH);
    delay (chesk); 
    digitalWrite(motor4, LOW); 
    delay (offTime);

    digitalWrite(motor5, HIGH);
    delay (chesk); 
    digitalWrite(motor5, LOW); 
    delay (offTime);

    digitalWrite(motor6, HIGH);
    delay (chesk); 
    digitalWrite(motor6, LOW); 
    delay (offTime);
}

//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 if (input=='Z'){
  ///////////////PISTON
   digitalWrite (IN2, LOW);
  digitalWrite (IN1, HIGH); 
  delay(1000);
  // Motor no gira
  digitalWrite (IN2, HIGH); 
  delay(1000);
  // Motor gira en sentido inverso
  digitalWrite (IN1, LOW);
  delay(1000);
  // Motor no gira
  digitalWrite (IN1, HIGH); 
  delay(1000);

}
}
}
//FIN DEL PROGRAMA





