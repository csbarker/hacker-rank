/* https://www.hackerrank.com/challenges/java-static-initializer-block/problem */
import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {
	public static void main(String[] args){
		if(flag){
			int area=B*H;
			System.out.print(area);
		}
		
		static Scanner input = new Scanner(System.in);
		static boolean flag = true;
		static int B = input.nextInt();
		static int H = input.nextInt();

		static{
			try{
				if(B <= 0 || H <= 0){
					flag = false;
					throw new Exception("Breadth and height must be positive");
				}
			}catch(Exception e){
				System.out.println(e);
			}
		}
	}//end of main
}//end of class

