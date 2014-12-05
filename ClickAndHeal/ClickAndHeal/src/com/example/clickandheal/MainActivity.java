package com.example.clickandheal;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.widget.TextView;

public class MainActivity extends Activity {

	Numbers n = new Numbers(1, 1);
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);

	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}
	
	public void incr_cash(View view)
	{
		TextView tv = (TextView)findViewById(R.id.tv1);
		int cash = Integer.parseInt(tv.getText().toString());
		cash += n.get_cash();
		tv.setText(Integer.toString(cash));
	}

}
