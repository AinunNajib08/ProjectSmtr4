package com.example.android;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;



public class MainActivity extends AppCompatActivity {

    private int mCount = 0;
    private int d=10;
    private int hitungan = 10;
    private TextView mShowCount;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mShowCount = (TextView) findViewById(R.id.show_count);
    }
    public void countUp(View view) {
        mCount++;
        if (mCount == hitungan) {
            Log.d("MainActivity", "Angka = "+d+"");
            Toast toast = Toast.makeText(this,"Kelipatan = "+hitungan+"", Toast.LENGTH_LONG);
            toast.show();
            hitungan+=d;
        }
        if (mShowCount !=null)
            mShowCount.setText(Integer.toString(mCount));
    }
    public void showToast(View view) {
        Toast toast = Toast.makeText(this,"Selamat Datang", Toast.LENGTH_LONG);
        toast.show();
    }

}