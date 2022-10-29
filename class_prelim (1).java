

import java.util.Scanner;

 
public class class_prelim {
Scanner inp =new Scanner(System.in);

public void input(){
    System.out.println("*****| Prelim Computation |*****");
    System.out.println("NOTE: Please fill up the grade to compute total grade");

    System.out.print("Enter Quiz #1: ");
    int qz1 =inp.nextInt();
            System.out.println("");
    System.out.print("Enter Quiz #2: ");
    int qz2 =inp.nextInt();
            System.out.println("");
System.out.print("Enter Assignment: ");
    int ass =inp.nextInt();
            System.out.println("");
    System.out.print("Enter Seatwork: ");
    int seat =inp.nextInt();
            System.out.println("");
        System.out.print("Enter Project: ");
    int proje =inp.nextInt();
            System.out.println("");
    System.out.print("Enter Attendance: ");
    int ate =inp.nextInt();
            System.out.println("");
    System.out.print("Enter Exam: ");
    int ex =inp.nextInt();
        System.out.println("");
    double  totalgrd=(((qz1+qz2)/2)*.40) + (((ass+ate+proje+seat)/4)*.10) + (ex *.50);


        if(totalgrd > 74.9){
            System.out.println("Total Grade of Prelim is:  " + totalgrd + " ||  Status: PASSED");
        }else {
          System.out.println("Total Grade of Prelim is:  " + totalgrd + " ||  Status: FAILED");
        }


}
}
