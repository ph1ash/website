int xtrans=0;
int yrot=20;
int xrot=-45;
int keyValue=0;
int blockCount=0;
float speed = 1.5;
Frame frame;

boolean flag=false;
boolean rotflag=false;

void setup() {
  size(700, 700, P3D);
  frame = new Frame();
}

void draw() {
  background(0);
  stroke(255);
  noFill();
  keyPressCheck();
  genEnv(xtrans);
}

void genEnv(int xtrans) {
  text("Block Count: "+blockCount, 20, 20);
  text("X Rotation : "+cos(radians(xrot)), 20, 32);
  text("Y Rotation : "+(-yrot), 20, 44);
  text("X Camera   : "+xtrans, 20, 56);
  translate(width/2+xtrans, height/2, 0);
  if (flag) {
    yrot=mouseY;
    xrot=mouseX;
  }
  rotateX(radians(-yrot));
  rotateY(radians(xrot));
  frame.drawFrame();
  translate(0, 0, 0);

  //Need to translate depending on the previous rotation values (based on camera position)
  translate(((mouseX-width/2)/speed)*cos(radians(xrot+45))+cos(radians(xtrans)), (mouseY-height/2), ((mouseX-width/2)/speed)*sin(radians(xrot+45))+sin(radians(xtrans)));
  rotateY(radians(-45));

  //Previously drawn blocks which are not active anymore need to remain 
  //at a static location
  for (int i=0;i<blocks.size();i++) {
    Block currentBlock = (Block) blocks.get(i);
    currentBlock.drawBlock();
  }
  blockCount=blocks.size();
}

class Block {

  float b_width;
  float b_length;
  float pos_x;
  float pos_y;
  float pos_z;
  float mult= 25;
  float[] b_color = new float[3];

  Block(float bwidth, float blength) {
    this.b_width = bwidth*mult;
    this.b_length = blength*mult;
    this.b_color[0] = 255;
    this.b_color[1] = 255;
    this.b_color[2] = 255;
  }

  void changeColor(float f, float s, float t) {
    b_color[0] = f;
    b_color[1] = s;
    b_color[2] = t;
  }

  void drawBlock() {
    float xCoord=0;
    float yCoord=0;
    float zCoord=0;
    fill(b_color[0], b_color[1], b_color[2]);
    //if (((float)mouseX<width/2) && ((float)mouseY<height/2)) {
      xCoord = (float)mouseX-width/2;
      yCoord = (float)mouseY-height/2;
    /*}else{
      zCoord = (float)-(mouseX-width/2);
      yCoord = (float) mouseY-height/2;
    }*/
    box(b_width, mult, b_length);
  }
}


class Frame {
  Frame() {
  }
  void drawFrame() {
    strokeWeight(3);
    stroke(255, 0, 0);
    line(0, 0, 0, 5000, 0, 0);
    stroke(0, 255, 0);
    line(0, 0, 0, 0, -5000, 0);
    stroke(0, 0, 255);
    line(0, 0, 0, 0, 0, 5000);
    stroke(255);
    strokeWeight(1);

    //Grid generation
    for (int i=0;i<275;i=i+25) {
      line(i, 0, 0, i, 0, 250);
    }
    for (int j=0;j<275;j=j+25) {
      line(0, 0, j, 250, 0, j);
    }

    //Axis Labeling
    for (int i=1;i<11;i++) {
      text(i, (i*25)-3, -10, 0);
    }
    text("-> X", 290, -10, 0);
    rotateY(radians(90));
    for (int i=1;i<11;i++) {
      text(i, -(i*25)-3, -10, 0) ;
    }
    text("Z <-", -300, -10, 0);
    rotateY(radians(-45));

    text("Y ", 5, -100, 10);
  }
}


void keyPressCheck() {
  if (keyPressed) {
    switch(key) {
      //q rotation
    case 'q':
      xrot=xrot-2;
      break;

      //e rotation
    case 'e':
      xrot=xrot+2;
      break;

      //press w||W to go up
    case 'w':
      yrot=yrot+2;
      break;

      //press s||S to go down
    case 's':
      yrot=yrot-2;
      break;

      //Press a||A to go left
    case 'a':
      xtrans=xtrans+2;
      break;

      //press D||d to go right
    case 'd':
      xtrans=xtrans-2;
      break;
    }
  }
}

ArrayList blocks = new ArrayList();

void keyReleased() {
  if (key==' ') {
    flag=!flag;
    rotflag=!rotflag;
  }
  else if(key=='z'){
    Block block1 = new Block(2,4);
    blocks.add(block1);
  }
  else if (key=='c') {
    xtrans=0;
    yrot=380;
    xrot=315;
  }
}


