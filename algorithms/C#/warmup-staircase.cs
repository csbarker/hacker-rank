using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

class Solution {

    /*
     * Complete the staircase function below.
     */
    static void staircase(int n) {
        /*
         * Write your code here.
         */
        for (int i = 0; i < n; i++) {
            var temp_string = new string('#', i+1);
            temp_string = temp_string.PadLeft(n, ' ');
            Console.WriteLine(temp_string);
        }
    }

    static void Main(string[] args) {
        int n = Convert.ToInt32(Console.ReadLine());

        staircase(n);
    }
}
