using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

class Solution {

    /*
     * Complete the plusMinus function below.
     */
    static void plusMinus(int[] arr) {
        /*
         * Write your code here.
         */
        double length = arr.Length;
        double positive = 0;
        double negative = 0;
        double zeros = 0;
        
        foreach (int i in arr) {
            if (i < 0) 
                negative++;
            if (i > 0)
                positive++;
            if (i == 0)
                zeros++;
        }
        
        double[] result = { 
            (positive / length),
            (negative / length),
            (zeros / length)
        };
        
        Console.WriteLine(result[0]);
        Console.WriteLine(result[1]);
        Console.WriteLine(result[2]);
    }

    static void Main(string[] args) {
        int n = Convert.ToInt32(Console.ReadLine());

        int[] arr = Array.ConvertAll(Console.ReadLine().Split(' '), arrTemp => Convert.ToInt32(arrTemp))
        ;
        plusMinus(arr);
    }
}
