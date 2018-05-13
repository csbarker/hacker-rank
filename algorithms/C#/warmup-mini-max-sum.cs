using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

class Solution {

    /*
     * Complete the miniMaxSum function below.
     */
    static void miniMaxSum(long[] arr) {
        /*
         * Write your code here.
         */
        long sum = arr.Sum();
        long minimum = 0;
        long maximum = 0;

        foreach (int i in arr) {
            long temp_sum = sum - i;
            
            if (minimum == 0)
                minimum = temp_sum;
            
            if (temp_sum > maximum)
                maximum = temp_sum;
            
            if (temp_sum < minimum)
                minimum = temp_sum;
        }
        
        long[] temp_result = { minimum, maximum };
        string result = string.Join(" ", temp_result);
        Console.WriteLine(result);
    }

    static void Main(string[] args) {
        long[] arr = Array.ConvertAll(Console.ReadLine().Split(' '), arrTemp => (long)Convert.ToDouble(arrTemp))
        ;
        miniMaxSum(arr);
    }
}
