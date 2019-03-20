package com.example.scorecounter;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;
public class MainActivity extends AppCompatActivity {
    private int a,b = 0;
    private TextView score1;
    private TextView score2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        score1 = (TextView) findViewById(R.id.mShowCount1);
        score2 = (TextView) findViewById(R.id.mShowCount2);
    }

    public void reset(View view) {
    a = 0;
    if (score1 != null);
    score1.setText(Integer.toString(a));
    b = 0;
    if (score2 != null);
        score2.setText(Integer.toString(b));
    }
    public void Tim_1(View view) {
        a++;
        if (score1 != null);
        score1.setText(Integer.toString(a));
    }
    public void Tim_2(View view) {
        b++;
        if (score2 != null);
        score2.setText(Integer.toString(b));
    }
}
