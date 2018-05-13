using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

class Solution {

    /*
     * Complete the diagonalDifference function below.
     */
    static int diagonalDifference(int[][] a) {
        /*
         * Write your code here.
         */
        var numberOfLines = a.Length;
        List<int> diagonal = new List<int>();
        List<int> diagonal_reverse = new List<int>();
        
        for (int i = 0; i < numberOfLines; i++) {
            diagonal.Add(a[i][i]);
        }
        for (int i = numberOfLines-1, y = 0; i > -1; i--, y++) {
            diagonal_reverse.Add(a[i][y]);
        }
        
        var dArr = diagonal.ToArray();
        var drArr = diagonal_reverse.ToArray();
        var result = Math.Abs(dArr.Sum() - drArr.Sum());
        
        return result;
    }

    static void Main(string[] args) {
        TextWriter tw = new StreamWriter(@System.Environment.GetEnvironmentVariable("OUTPUT_PATH"), true);

        int n = Convert.ToInt32(Console.ReadLine());

        int[][] a = new int[n][];

        for (int aRowItr = 0; aRowItr < n; aRowItr++) {
            a[aRowItr] = Array.ConvertAll(Console.ReadLine().Split(' '), aTemp => Convert.ToInt32(aTemp));
        }

        int result = diagonalDifference(a);

        tw.WriteLine(result);

        tw.Flush();
        tw.Close();
    }
}
