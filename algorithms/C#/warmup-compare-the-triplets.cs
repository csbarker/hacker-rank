using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

class Solution {

    /*
     * Complete the solve function below.
     */
    static int[] solve(int a0, int a1, int a2, int b0, int b1, int b2) {
        /*
         * Write your code here.
         */
        int[] alice = { a0, a1, a2 };
        int[] bob = { b0, b1, b2 };
        int[] result = { 0, 0 };

        for (int i = 0; i < alice.Length; i++)
        {
            if (alice[i] > bob[i])
                result[0]++;
            if (alice[i] < bob[i])
                result[1]++;
        }
        
        return result;
    }

    static void Main(string[] args) {
        TextWriter tw = new StreamWriter(@System.Environment.GetEnvironmentVariable("OUTPUT_PATH"), true);

        string[] a0A1A2 = Console.ReadLine().Split(' ');

        int a0 = Convert.ToInt32(a0A1A2[0]);

        int a1 = Convert.ToInt32(a0A1A2[1]);

        int a2 = Convert.ToInt32(a0A1A2[2]);

        string[] b0B1B2 = Console.ReadLine().Split(' ');

        int b0 = Convert.ToInt32(b0B1B2[0]);

        int b1 = Convert.ToInt32(b0B1B2[1]);

        int b2 = Convert.ToInt32(b0B1B2[2]);

        int[] result = solve(a0, a1, a2, b0, b1, b2);

        tw.WriteLine(string.Join(" ", result));

        tw.Flush();
        tw.Close();
    }
}
