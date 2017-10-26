// https://www.hackerrank.com/challenges/java-string-tokens/problem
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String s = scan.nextLine();
        s = s.trim();
        
        if(s.length() == 0) {
            System.out.println("0");
            System.exit(0);
        }
        
        String delims = "[_\\@ !,?.' ]+";
        String[] tokens = s.split(delims);
                
        scan.close();
        
        System.out.println(tokens.length);
        for(int i = 0; i < tokens.length; i++) {
            System.out.println(tokens[i]);
        }
    }
}