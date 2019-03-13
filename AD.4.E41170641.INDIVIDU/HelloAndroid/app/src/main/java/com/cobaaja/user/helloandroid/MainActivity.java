package com.cobaaja.user.helloandroid;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        double i = 5;
        double j = 10 / i;
        

        setContentView(R.layout.activity_main);
    }
}
