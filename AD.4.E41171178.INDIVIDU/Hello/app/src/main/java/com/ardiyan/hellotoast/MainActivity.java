package com.ardiyan.hellotoast;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
private int mCount = 0;
private int ashiap = 10;
private int data = 10;
private TextView mShowCount;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mShowCount = (TextView) findViewById(R.id.show_count);
    }


    public void showToast(View view) {
        Toast toast = Toast.makeText( this, getString(R.string.button_label_toast), Toast.LENGTH_LONG);
        toast.show();

    }

    public void showReset(View view) {
        mCount=0;
        data=10;
        if (mShowCount !=null)
            mShowCount.setText(Integer.toString(mCount));
    }

    public void CountUp(View view) {
        mCount++;
        if (mCount == data){
            Log.d("MainActivity", "Angka = "+data+"");
            Toast toast = Toast.makeText(this, "ini angka ke ="+data+"", Toast.LENGTH_LONG);
            toast.show();
            data+=ashiap;
        }
        if (mShowCount != null)
            mShowCount.setText(Integer.toString(mCount));

    }
}

