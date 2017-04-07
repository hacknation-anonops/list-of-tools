
import java.util.Scanner;

public class Hello {
	
	public static void main(String[] string){
		System.out.println("What is your name?");
		Scanner scan=new Scanner(System.in);
		String name=scan.next();
		
		System.out.println("Welcome to hacknation \n"+ name );
	}

}
